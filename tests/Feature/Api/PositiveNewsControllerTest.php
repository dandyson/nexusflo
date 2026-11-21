<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class PositiveNewsControllerTest extends TestCase
{
    use RefreshDatabase;

    private const GOOD_NEWS_NETWORK_URL = 'https://www.goodnewsnetwork.org/category/news/*';

    /**
     * @test
     */
    public function userCanFetchPositiveNews()
    {
        $this->authUser();

        Http::fake([
            self::GOOD_NEWS_NETWORK_URL => Http::response($this->goodNewsNetworkHtml(), 200),
        ]);

        $this->getJson(route('news-fetch'))
            ->assertOk()
            ->assertJsonCount(2, 'data.good-news-network')
            ->assertJsonPath('data.good-news-network.0.title', 'First story')
            ->assertJsonPath('data.good-news-network.0.link', 'https://example.com/story-1')
            ->assertJsonPath('data.good-news-network.1.image', 'https://example.com/2.jpg')
            ->assertJsonPath('errors', []);
    }

    /**
     * @test
     */
    public function failingSourceIsReportedWithoutBreakingTheResponse()
    {
        $this->authUser();

        Http::fake([
            self::GOOD_NEWS_NETWORK_URL => Http::response('Forbidden', 403),
        ]);

        $this->getJson(route('news-fetch'))
            ->assertOk()
            ->assertJsonPath('data.good-news-network', [])
            ->assertJsonPath('errors', ['good-news-network']);
    }

    /**
     * @test
     */
    public function unexpectedPageLayoutIsReportedAsAnError()
    {
        $this->authUser();

        Http::fake([
            self::GOOD_NEWS_NETWORK_URL => Http::response('<html><body>Redesigned</body></html>', 200),
        ]);

        $this->getJson(route('news-fetch'))
            ->assertOk()
            ->assertJsonPath('errors', ['good-news-network']);
    }

    private function goodNewsNetworkHtml(): string
    {
        return <<<'HTML'
            <div class="td-block-row">
                <div class="td-block-span6">
                    <div class="td-module-thumb">
                        <a href="https://example.com/story-1"><img src="https://example.com/1.jpg"></a>
                    </div>
                    <div class="td_module_3"><h3>First story</h3></div>
                </div>
                <div class="td-block-span6">
                    <div class="td-module-thumb">
                        <a href="https://example.com/story-2"><img src="https://example.com/2.jpg"></a>
                    </div>
                    <div class="td_module_3"><h3>Second story</h3></div>
                </div>
                <div class="td-block-span6">
                    <div class="td_module_3"><h3>Broken card with no image or link</h3></div>
                </div>
            </div>
            HTML;
    }
}

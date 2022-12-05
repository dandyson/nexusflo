<script setup>
import { ref } from "vue";

// Vue Highlight.js, for more info and examples you can check out https://github.com/metachris/vue-highlightjs
import hljs from "highlight.js/lib/core";
import javascriptLang from "highlight.js/lib/languages/javascript";
import jsonLang from "highlight.js/lib/languages/json";
import pythonLang from "highlight.js/lib/languages/python";
import rubyLang from "highlight.js/lib/languages/ruby";
import phpLang from "highlight.js/lib/languages/php";
import xmlLang from "highlight.js/lib/languages/xml";
import cssLang from "highlight.js/lib/languages/css";
import scssLang from "highlight.js/lib/languages/scss";
import VueHighlightJS from "@highlightjs/vue-plugin";

// Register Languages
hljs.registerLanguage("javascript", javascriptLang);
hljs.registerLanguage("json", jsonLang);
hljs.registerLanguage("python", pythonLang);
hljs.registerLanguage("ruby", rubyLang);
hljs.registerLanguage("php", phpLang);
hljs.registerLanguage("xml", xmlLang);
hljs.registerLanguage("css", cssLang);
hljs.registerLanguage("scss", scssLang);

// Get component
const HighlightJS = VueHighlightJS.component;

// Example Code
const codeHtml = ref(`<!doctype html>
<html>

<head>
  <meta charset="utf-8">

  <title>Title</title>
</head>

<body>
  <!-- Your content -->
</body>

</html>`);

const codeCss = ref(`/*
=================================================================
SECTION
=================================================================
*/

/* Sub section 1 */
selector {

}

/* Sub section 2 */
selector {

}

/*
=================================================================
SECTION
=================================================================
*/

/* Sub section 1 */
selector {

}

/* Sub section 2 */
selector {

}`);

const codeScss = ref(`$font-stack: Helvetica, sans-serif;
$primary-color: #333;

body {
  font: 100% $font-stack;
  color: $primary-color;
}`);

const codeJavascript = ref(`/*
 *  Document   : app.js
 *  Author     : pixelcave
 */

var App = function () {

  // User Interface init
  var uiInit = function () {

  };

  return {
    init: function () {
      uiInit();
    }
  };
}();

// Initialize app when page loads
jQuery(function(){ App.init(); });`);

const codePhp = ref(`<?php
class App {
  function home()
  {
    // ...
  }

  function profile()
  {
    // ...
  }

  function settings()
  {
    // ...
  }
}`);

const codeRuby = ref(`# Output "I love Ruby"
say = "I love Ruby"
puts say

# Output "I *LOVE* RUBY"
say['love'] = "*love*"
puts say.upcase

# Output "I *love* Ruby"
# five times
5.times { puts say }`);

const codePython = ref(`name = raw_input('What is your name?')
print 'Hi, %s.' % name`);

const codeJson = ref(`{
    "menu": {
        "id": "file",
        "value": "File",
        "popup": {
            "menuitem": [
                {"value": "New", "onclick": "CreateNewDoc()"},
                {"value": "Open", "onclick": "OpenDoc()"},
                {"value": "Close", "onclick": "CloseDoc()"}
            ]
        }
    }
}`);
</script>

<style>
@import "highlight.js/styles/atom-one-dark.css";
</style>

<template>
  <!-- Hero -->
  <BasePageHeading
    title="Highlight.js"
    subtitle="Beautiful syntax highlighting to showcase your code."
  >
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Plugins</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">
            Syntax Highlighting
          </li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- HTML -->
    <BaseBlock title="HTML">
      <HighlightJS language="xml" :code="codeHtml" />
    </BaseBlock>
    <!-- END HTML -->

    <!-- CSS -->
    <BaseBlock title="CSS">
      <HighlightJS language="css" :code="codeCss" />
    </BaseBlock>
    <!-- END CSS -->

    <!-- SCSS -->
    <BaseBlock title="SCSS">
      <HighlightJS language="scss" :code="codeScss" />
    </BaseBlock>
    <!-- END SCSS -->

    <!-- JavaScript -->
    <BaseBlock title="JavaScript">
      <HighlightJS language="javascript" :code="codeJavascript" />
    </BaseBlock>
    <!-- END JavaScript -->

    <!-- PHP -->
    <BaseBlock title="PHP">
      <HighlightJS language="php" :code="codePhp" />
    </BaseBlock>
    <!-- END PHP -->

    <!-- Ruby -->
    <BaseBlock title="Ruby">
      <HighlightJS language="ruby" :code="codeRuby" />
    </BaseBlock>
    <!-- END Ruby -->

    <!-- Python -->
    <BaseBlock title="Python">
      <HighlightJS language="python" :code="codePython" />
    </BaseBlock>
    <!-- END Python -->

    <!-- JSON -->
    <BaseBlock title="JSON">
      <HighlightJS language="json" :code="codeJson" />
    </BaseBlock>
    <!-- END JSON -->
  </div>
  <!-- END Page Content -->
</template>

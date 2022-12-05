<script setup>
import { ref } from "vue";

// CKEditor 5, for more info and examples you can check out https://ckeditor.com/docs/ckeditor5/latest/builds/guides/integration/frameworks/vuejs-v3.html
import CKEditor from "@ckeditor/ckeditor5-vue";

// You can import one of the following CKEditor variation (only one at a time)
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
//import InlineEditor from '@ckeditor/ckeditor5-build-inline'
//import BalloonEditor from '@ckeditor/ckeditor5-build-balloon'
//import BalloonBlockEditor from '@ckeditor/ckeditor5-build-balloon-block'

// Tiptap editor, for more info and examples you can check out https://github.com/ueberdosis/tiptap
import { useEditor, EditorContent } from "@tiptap/vue-3";
import StarterKit from "@tiptap/starter-kit";

// CKEditor 5 variables
let ckeditor = CKEditor.component;

const editorData = ref("<p>Hello CKEditor5!</p>");
const editorConfig = ref({});

// Init Tiptap editor
const tiptap = useEditor({
  extensions: [StarterKit],
  content: `
<h2>
  Hi there,
</h2>
<p>
  this is a <em>basic</em> example of <strong>tiptap</strong>. Sure, there are all kind of basic text styles you’d probably expect from a text editor. But wait until you see the lists:
</p>
<ul>
  <li>
    That’s a bullet list with one …
  </li>
  <li>
    … or two list items.
  </li>
</ul>
<p>
  Isn’t that great? And all of that is editable. But wait, there’s more. Let’s try a code block:
</p>
<pre><code class="language-css">body {
  display: none;
}</code></pre>
<p>
  I know, I know, this is impressive. It’s only the tip of the iceberg though. Give it a try and click a little bit around. Don’t forget to check the other examples too.
</p>
<blockquote>
  Wow, that’s amazing. Good work, boy! 👏
  <br />
  — Mom
</blockquote>
`,
});
</script>

<style lang="scss">
// Tiptap overrides
.ProseMirror-focused {
  outline: none;
}
</style>

<template>
  <!-- Hero -->
  <BasePageHeading title="Form Editors" subtitle="Text editing at its finest.">
    <template #extra>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
          <li class="breadcrumb-item">
            <a class="link-fx" href="javascript:void(0)">Forms</a>
          </li>
          <li class="breadcrumb-item" aria-current="page">Editors</li>
        </ol>
      </nav>
    </template>
  </BasePageHeading>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- CKEditor 5 -->
    <BaseBlock title="CKEditor 5" content-full>
      <ckeditor
        :editor="ClassicEditor"
        :config="editorConfig"
        v-model="editorData"
      />
    </BaseBlock>
    <!-- END CKEditor 5 -->

    <!-- Tiptap -->
    <BaseBlock title="Tiptap" content-full>
      <div
        v-if="tiptap"
        class="pb-3 mb-3 border-bottom flex flex-column flex-sm-row"
      >
        <div class="btn-group d-block d-sm-inline-block me-sm-2 mb-2 mb-sm-0">
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().toggleBold().run()"
            :class="{ active: tiptap.isActive('bold') }"
          >
            <i class="fa fa-bold"></i>
          </button>
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().toggleItalic().run()"
            :class="{ active: tiptap.isActive('italic') }"
          >
            <i class="fa fa-italic"></i>
          </button>
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().toggleStrike().run()"
            :class="{ active: tiptap.isActive('strike') }"
          >
            <i class="fa fa-strikethrough"></i>
          </button>
        </div>

        <div class="btn-group d-block d-sm-inline-block me-sm-2 mb-2 mb-sm-0">
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().setParagraph().run()"
            :class="{ active: tiptap.isActive('paragraph') }"
          >
            P
          </button>
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().toggleHeading({ level: 1 }).run()"
            :class="{ active: tiptap.isActive('heading', { level: 1 }) }"
          >
            H1
          </button>
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().toggleHeading({ level: 2 }).run()"
            :class="{ active: tiptap.isActive('heading', { level: 2 }) }"
          >
            H2
          </button>
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().toggleHeading({ level: 3 }).run()"
            :class="{ active: tiptap.isActive('heading', { level: 3 }) }"
          >
            H3
          </button>
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().toggleBulletList().run()"
            :class="{ active: tiptap.isActive('bulletList') }"
          >
            <i class="fa fa-list-ul"></i>
          </button>
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().toggleOrderedList().run()"
            :class="{ active: tiptap.isActive('orderedList') }"
          >
            <i class="fa fa-list-ol"></i>
          </button>
        </div>

        <div class="btn-group d-block d-sm-inline-block me-sm-2 mb-2 mb-sm-0">
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().toggleCode().run()"
            :class="{ active: tiptap.isActive('code') }"
          >
            <i class="fa fa-code"></i>
          </button>
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().toggleCodeBlock().run()"
            :class="{ active: tiptap.isActive('codeBlock') }"
          >
            <i class="fa fa-laptop-code"></i>
          </button>
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().toggleBlockquote().run()"
            :class="{ active: tiptap.isActive('blockquote') }"
          >
            <i class="fa fa-quote-left"></i>
          </button>
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().setHorizontalRule().run()"
          >
            <i class="fa fa-ruler-horizontal"></i>
          </button>
        </div>

        <div class="btn-group d-block d-sm-inline-block me-sm-2">
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().undo().run()"
          >
            <i class="fa fa-arrow-rotate-left"></i>
          </button>
          <button
            class="btn btn-sm btn-primary"
            @click="tiptap.chain().focus().redo().run()"
          >
            <i class="fa fa-arrow-rotate-right"></i>
          </button>
        </div>
      </div>
      <EditorContent :editor="tiptap" />
    </BaseBlock>
    <!-- END Tiptap -->
  </div>
  <!-- END Page Content -->
</template>

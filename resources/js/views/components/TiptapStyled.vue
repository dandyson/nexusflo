<template>
  <div v-if="editor">

    <div class="pb-3 mb-3 border-bottom flex flex-column flex-sm-row">
      <div class="btn-group d-block d-sm-inline-block me-sm-2 mb-2 mb-sm-0">
        <button class="btn btn-sm btn-primary" @click="editor.chain().focus().toggleBold().run()"
      :disabled="!editor.can().chain().focus().toggleBold().run()" :class="{ 'is-active': editor.isActive('bold') }">
          <i class="fa fa-bold"></i>
        </button>
        <button class="btn btn-sm btn-primary" @click="editor.chain().focus().toggleItalic().run()"
      :disabled="!editor.can().chain().focus().toggleItalic().run()" :class="{ 'is-active': editor.isActive('italic') }">
          <i class="fa fa-italic"></i>
        </button>
        <button class="btn btn-sm btn-primary" @click="editor.chain().focus().toggleStrike().run()"
      :disabled="!editor.can().chain().focus().toggleStrike().run()" :class="{ 'is-active': editor.isActive('strike') }">
          <i class="fa fa-strikethrough"></i>
        </button>
      </div>
      <div class="btn-group d-block d-sm-inline-block me-sm-2 mb-2 mb-sm-0">
        <button class="btn btn-sm btn-primary" @click="editor.chain().focus().setParagraph().run()"
      :class="{ 'is-active': editor.isActive('paragraph') }"> 
          P
        </button>
        <button class="btn btn-sm btn-primary" @click="editor.chain().focus().toggleHeading({ level: 1 }).run()"
      :class="{ 'is-active': editor.isActive('heading', { level: 1 }) }"> 
          H1 
        </button>
        <button class="btn btn-sm btn-primary active" @click="editor.chain().focus().toggleHeading({ level: 2 }).run()"
      :class="{ 'is-active': editor.isActive('heading', { level: 2 }) }">
          H2
        </button>
        <button class="btn btn-sm btn-primary" @click="editor.chain().focus().toggleHeading({ level: 3 }).run()"
      :class="{ 'is-active': editor.isActive('heading', { level: 3 }) }"> 
          H3 
        </button>
        <button class="btn btn-sm btn-primary" @click="editor.chain().focus().toggleBulletList().run()"
      :class="{ 'is-active': editor.isActive('bulletList') }">
          <i class="fa fa-list-ul"></i>
        </button>
        <button class="btn btn-sm btn-primary" @click="editor.chain().focus().toggleOrderedList().run()"
      :class="{ 'is-active': editor.isActive('orderedList') }">
          <i class="fa fa-list-ol"></i>
        </button>
      </div>
      <div class="btn-group d-block d-sm-inline-block me-sm-2 mb-2 mb-sm-0">
        <button class="btn btn-sm btn-primary" @click="editor.chain().focus().toggleCode().run()"
      :disabled="!editor.can().chain().focus().toggleCode().run()" :class="{ 'is-active': editor.isActive('code') }">
          <i class="fa fa-code"></i>
        </button>
        <button class="btn btn-sm btn-primary" @click="editor.chain().focus().toggleCodeBlock().run()">
          <i class="fa fa-laptop-code"></i>
        </button>
        <button class="btn btn-sm btn-primary" @click="editor.chain().focus().setHorizontalRule().run()">
          <i class="fa fa-ruler-horizontal"></i>
        </button>
      </div>
      <div class="btn-group d-block d-sm-inline-block me-sm-2">
        <button class="btn btn-sm btn-primary" @click="editor.chain().focus().undo().run()"
      :disabled="!editor.can().chain().focus().undo().run()">
          <i class="fa fa-arrow-rotate-left"></i>
        </button>
        <button class="btn btn-sm btn-primary" @click="editor.chain().focus().redo().run()"
      :disabled="!editor.can().chain().focus().redo().run()">
          <i class="fa fa-arrow-rotate-right"></i>
        </button>
      </div>
    </div>    
  </div>
  <div class="tiptapStyled">
    <EditorContent :editor="editor" />
  </div>
</template>
  
<script setup>
import StarterKit from '@tiptap/starter-kit'
import { Editor, EditorContent } from '@tiptap/vue-3'
import { ref, onMounted, onBeforeUnmount, watch } from 'vue'

const props = defineProps({
  modelValue: {
    type: String,
    default: '',
  },
})

const emit = defineEmits(['update:modelValue'])

const editor = ref(null)

onMounted(() => {
  editor.value = new Editor({
    extensions: [StarterKit],
    content: props.modelValue,
    onUpdate: () => {
      emit('update:modelValue', editor.value.getHTML())
    },
  })
})

onBeforeUnmount(() => {
  editor.value.destroy()
})

watch(
  () => props.modelValue,
  (value) => {
    const isSame = editor.value.getHTML() === value

    if (!isSame) {
      editor.value.commands.setContent(value, false)
    }
  }
)
</script>
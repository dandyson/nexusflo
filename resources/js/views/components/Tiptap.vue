<template>
    <EditorContent :editor="editor" />
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
  
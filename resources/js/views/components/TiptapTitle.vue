<template>
  <div class="tiptapHello">
    <editor-content :editor="editor" ref="titleEditorContent" />
  </div>
</template>

<script setup>
import StarterKit from '@tiptap/starter-kit'
import { Editor, EditorContent } from '@tiptap/vue-3'
import { ref, onMounted, onBeforeUnmount, watch } from 'vue';

const props = defineProps({
  modelValue: {
    type: String,
    default: '',
  },
})

const emit = defineEmits(['update:modelValue'])

const editor = ref(null)
const titleEditorContent = ref(null)

onMounted(() => {
  editor.value = new Editor({
    content: `<h2>${props.modelValue}</h2>`,
    extensions: [
      StarterKit.configure({
        schema: {
          rules: [
            {
              // Add a custom rule to enforce <h2> tags for content
              // This assumes you want all content to be an <h2> tag
              // Modify the rule as needed for your use case
              tag: 'h2',
            },
          ],
        },
      }),
    ],
    onUpdate: () => {
      // HTML
      emit('update:modelValue', editor.value.getHTML())

      // JSON
      // emit('update:modelValue', editor.value.getJSON())
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

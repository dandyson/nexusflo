<template>
  <div class="tiptapTitle">
    <editor-content :editor="editor" />
  </div>
</template>

<script>
import StarterKit from '@tiptap/starter-kit'
import { Editor, EditorContent } from '@tiptap/vue-3'

export default {
  components: {
    EditorContent,
  },

  props: {
    modelValue: {
      type: String,
      default: '',
    },
  },

  emits: ['update:modelValue'],

  data() {
    return {
      editor: null,
    }
  },

  watch: {
    modelValue(value) {
      // HTML
      const isSame = this.editor.getHTML() === value

      // JSON
      // const isSame = JSON.stringify(this.editor.getJSON()) === JSON.stringify(value)

      if (isSame) {
        return
      }

      this.editor.commands.setContent(`<h1>${value}</h1>`, false)
    },
  },

  mounted() {
    this.editor = new Editor({
      content: `<h1>${this.modelValue}</h1>`,
      extensions: [
        StarterKit.configure({
          schema: {
            rules: [
              {
                // Add a custom rule to enforce <h1> tags for content
                // This assumes you want all content to be an <h1> tag
                // Modify the rule as needed for your use case
                tag: 'h1',
              },
            ],
          },
        }),
      ],
      onUpdate: () => {
        // HTML
        this.$emit('update:modelValue', this.editor.getHTML())

        // JSON
        // this.$emit('update:modelValue', this.editor.getJSON())
      },
    })
  },

  beforeUnmount() {
    this.editor.destroy()
  },
}
</script>

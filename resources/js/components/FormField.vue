<template>
  <DefaultField
    :field="field"
    :errors="errors"
    :show-help-text="showHelpText"
    :full-width-content="fullWidthContent"
  >
    <template #field>
      <div id="app">
        <froala id="edit" :tag="'textarea'" :config="config" v-model:value="value"></froala>
      </div>
    </template>
  </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova';
//Import Froala Editor 
import 'froala-editor/js/plugins.pkgd.min.js';
//Import third party plugins
import 'froala-editor/js/third_party/embedly.min';
import 'froala-editor/js/third_party/font_awesome.min';
import 'froala-editor/js/third_party/image_tui.min';
// Import Froala Editor css files.
import 'froala-editor/css/froala_editor.pkgd.min.css';
import 'froala-editor/css/froala_style.min.css';

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || ''
      this.config = this.field.options || {
        attribution: false,
        key: this.field.apiKey,
        charCounterCount: false,
        listAdvancedTypes: false,
        pastePlain: true,
        spellcheck: false,
        wordCounterCount: false,

        toolbarButtons: {
          moreText: {
            buttons: ['bold', 'italic', 'underline'],
            buttonsVisible: 3
          },
          moreParagraph: {
            buttons: ['paragraphFormat', 'formatOL', 'formatUL'],
            buttonsVisible: 3
          },
          moreRich: {
            buttons: ['insertLink', 'insertTable', 'specialCharacters'],
            buttonsVisible: 3
          },
          moreMisc: {
            buttons: ['undo', 'redo', 'fullscreen', 'html', 'help'],
            buttonsVisible: 5
          }
        },

        toolbarButtonsXS: {
          moreText: {
            buttons: ['bold', 'italic', 'underline'],
            buttonsVisible: 2
          },
          moreParagraph: {
            buttons: ['paragraphFormat', 'formatOL', 'formatUL'],
            buttonsVisible: 2
          },
          moreRich: {
            buttons: ['insertLink', 'insertTable'],
            buttonsVisible: 1
          }
        },

        events: {
          initialized: function () {
            
          }
        }
      }
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.fieldAttribute, this.value || '')
    },
  },
}
</script>
<style>
.fr-view h1 {
    display: block !important;
    color: #333;
    font-size: clamp(2rem, 5vw, 3rem);
    font-weight: bold;
    line-height: 1.2;
}

.fr-dropdown-list h1 {
  display: block !important;
}

.fr-view h2 {
    display: block !important;
    color: #333;
    font-size: clamp(1.75rem, 4.5vw, 2.5rem);
    font-weight: bold;
    line-height: 1.3;
}

.fr-view h3 {
    display: block !important;
    color: #333;
    font-size: clamp(1.5rem, 4vw, 2rem);
    font-weight: bold;
    line-height: 1.4;
}

.fr-view h4 {
    display: block !important;
    color: #333;
    font-size: clamp(1.25rem, 3.5vw, 1.75rem);
    font-weight: bold;
    line-height: 1.5;
}

.fr-view h5 {
    display: block !important;
    color: #333;
    font-size: clamp(1rem, 3vw, 1.5rem);
    font-weight: bold;
    line-height: 1.6;
}

.fr-view ul,
.fr-view ol {
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}

.fr-view ul {
  list-style: disc;
}

.fr-view ol {
  list-style: decimal;
}
</style>
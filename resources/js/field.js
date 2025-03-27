import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'
import VueFroala from 'vue-froala-wysiwyg';

Nova.booting((app, store) => {
  app.use(VueFroala)
  app.component('index-froala-text-editor', IndexField)
  app.component('detail-froala-text-editor', DetailField)
  app.component('form-froala-text-editor', FormField)
})



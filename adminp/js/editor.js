
tinymce.init({
  selector: 'textarea#editor',
  plugins: 'print preview paste importcss searchreplace autolink directionality code  fullscreen image link  template codesample table charmap hr pagebreak nonbreaking anchor advlist lists wordcount textpattern noneditable help charmap quickbars emoticons',
  menubar: 'file edit view format tools table help',
  toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | image media template link anchor codesample | ltr rtl',
  toolbar_sticky: true,
  image_advtab: true,
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css'
  ],
  importcss_append: true,
  height: 400,
  templates: [
        { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
    { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
    { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
  ],
  height: 600,
  quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quicktable',
  noneditable_noneditable_class: "mceNonEditable",
  toolbar_drawer: 'sliding',
  contextmenu: "link table",
 });


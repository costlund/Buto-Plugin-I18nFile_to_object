# Buto-Plugin-I18nFile_to_object
Set translation file to a Javascript object to later access it when using method PluginI18nJson_v1.i18n. 

## Widget
Set I18N folder and what object to set.
```
type: widget
data:
  plugin: 'i18n/file_to_object'
  method: run
  data:
    item:
      -
        folder: /plugin/some/plugin/i18n
        object: PluginSomePlugin.i18n
```

## Translation
Example of using object when translate.
```
function PluginSomePlugin(){
  this.i18n = {'_': 'This is set from widget i18n/file_to_object, run.'};
  this.view = function(id){
    PluginWfBootstrapjs.modal({id: 'modal_view', url: '/some/plugin/id/'+id, lable: PluginI18nJson_v1.i18n('View', this.i18n)});
  }
}
```

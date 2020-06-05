<?php
class PluginI18nFile_to_object{
  public function widget_run($data){
    /**
     * 
     */
    $data = new PluginWfArray($data['data']);
    /**
     * 
     */
    if(!$data->get('item')){
      throw new Exception(__CLASS__.' says: item is not set.');
    }
    /**
     * 
     */
    $element = array();
    foreach ($data->get('item') as $key => $value) {
      $i = new PluginWfArray($value);
      $i18n = new PluginWfYml(wfGlobals::getAppDir().$i->get('folder').'/'.wfI18n::getLanguage().'.yml');
      if($i18n){
        $element[] = wfDocument::createHtmlElement('script', $i->get('object')."=".json_encode($i18n->get()));
      }
    }
    wfDocument::renderElement($element);
  }
}

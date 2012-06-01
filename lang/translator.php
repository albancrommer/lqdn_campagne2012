<?php


class translator{
    
    public function __construct($options) {
        $this->lang         = $options["lang"];
        $this->translation  = $options['translation'];
        
    }
    // the main function : t(ranslate)
    public function t($key = null){
        if( null === $key ){
            return $this->error("MISSING KEY");
        }
        if( array_key_exists($key, $this->translation)){
            return $this->display($this->translation[$key]);
        }else{
            return $this->error("MISSING TRANSLATION");           
        }
    }
    // escape if required
    private function display( $translated = null ){
        if( null === $translated){
            return $this->error("MISSING TRANSLATION STRING");
        }
        if (is_array($translated) || is_object($translated)){
            return $translated;
        }
        return ($translated);
    }
    
    // Log, email, return, etc.
    private function error( $string = null ){
        
        // Stuff went wrong
        if( null === $string){
            return   "MISSING ERRROR STRING";
        }
        // More if required here ...
        // ...
        // echo
        return utf8_encode($string);
    }
}

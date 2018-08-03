<?php

namespace JakubKrzemiński;

class Fetch {

  public $link;
  public $title;
  public $description;
  public $pubDate;
  public $dc;
  public $creator;
  public $fields = [];
  public $header = [];
  public $fp;
  public $rss;

  public function loader($type,$url,$path){
          $this->rss = simplexml_load_file($url);



            if($this->rss){
              
                  foreach($this->rss->channel->item as $item)
                      {
                          $this->link = $item->link;
                          $this->title = $item->title;
                          $this->description = $item->description;
                          $this->pubDate = $item->pubDate;
                          $this->newDateTime= date("Y-m-d H:i:s", strtotime($this->pubDate));
                          $this->dc = $item->children("http://purl.org/dc/elements/1.1/");
                          $this->creator = $this->dc->creator;
                          
                        $this->fields[] = [
                          $this->title,
                          $this->description, 
                          $this->link,
                          $this->newDateTime,
                          $this->creator
                        ] ;
                          
                      }
            

          $this->fp = fopen($path, $type);
          $this->header = ["title", "description","link","pubDate","creator"];
          fputcsv($this->fp, $this->header, ";")or die("Failed to write contents to new file");
          foreach($this->fields as $field) {
             fputcsv($this->fp, $field, ";")or die("Failed to write contents to new file");
          }

             fclose($this->fp);

             return true;

          }else{
            die("Failed to read contents of feed at $url");
          }
        }

      }
        


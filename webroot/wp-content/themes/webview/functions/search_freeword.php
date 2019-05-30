<?php
//検索用の情報をコンテンツエディタに保存するテスト
function insert_post_handler( $data , $postarr ){
    if( isset($postarr) && isset($postarr["post_view"]) && $postarr["post_view"] == "list" ){
        return multi_insert_post_data($data , $postarr);
    }else{
        return single_insert_post_data($data , $postarr);
    }
}
add_filter( 'wp_insert_post_data' , 'insert_post_handler' , '99', 2 );

function single_insert_post_data($data , $postarr){
    global $post;
    $id = $post->ID;
    if(isset($data['post_type'])){
        if ($id) {
			// CustomField
			$fields = $_POST['fields'];
			$content_text = "";
			switch ($data['post_type']) {
				case 'column':
				case 'laboratory':
				case 'special':
				case 'case':
				case 'information':
					$customAll = get_field_objects($id);
					foreach ($customAll as $key => $value) {
						if ($value['type']) {
							switch ($value['type']) {
								case 'wysiwyg':
								case "text":
								case "textarea":
									$content_text .= create_search_string($fields[$value['key']]);
									break;
								case 'repeater':
									$tmp_array = $fields[$value['key']];
									foreach ($tmp_array as $tmp_key => $tmp_val) {
										if ($tmp_key['acfcloneindex']) continue;

										foreach ($value['sub_fields'] as $sub_key => $sub_val) {
											$content_text .= create_search_string($tmp_val[$sub_val['key']]);
										}
									}
									berak;
							}
						}
					}
					$data['post_content'] = $content_text;
					break;
			}
		}
    }
    return $data;
}

function multi_insert_post_data($data , $postarr){
    return $data;
}

function create_search_string($string){
    $string = strip_tags($string);
    $string = str_replace(array("\r\n", "\n", "\r"), "", $string);
    $string = trim($string);
    if($string != "") $string .= "\r\n";
    return $string;
}

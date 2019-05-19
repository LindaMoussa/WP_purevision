<?php

function hvc_shortcoe($atts, $content=null) {
        extract(shortcode_atts(array(
        
            "style" => 'circle',
            "circle_effects" => 'effect1',
            "square_effects" => 'effect1',
            "square2_effects" => 'effect1',
            "caption_effects" => 'effect1',
            "animation" => 'left_to_right',
            "image" => '',
            "title" => 'Heading Goes Here',
            "description" => 'description goes here',
            "link" => '',

            "css_class" => '',
            
        ), $atts));
         

        $image = wp_get_attachment_image_src( $image, 'full' ); 
          
        $link   = vc_build_link( $link );
        
        if ($remove_underline) {
            $remove_underline = 'none';
        }
        
        if ($desc_normal) {
          $output ='<style>.ih-item .info p {
                        font-style: normal !important;
                    }</style>';
        }      
         
        $output .= '<style>@import url(https://fonts.googleapis.com/css?family='.$font.');</style>';
        
        
        
        if ( $style=='circle' && $circle_effects=='effect1' ){
    
            $output .= '<div class="ih-item circle effect1 '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <div class="info-back" >
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></div></a></div>';
        }
        
        if ( $style=='circle' && $circle_effects=='effect2' ){
    
            $output .= '<div class="ih-item circle effect2 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }
                
        if ( $style=='circle' && $circle_effects=='effect3' ){
    
            $output .= '<div class="ih-item circle effect3 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }
        
        if ( $style=='circle' && $circle_effects=='effect4' ){
    
            $output .= '<div class="ih-item circle effect4 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }
        
        if ( $style=='circle' && $circle_effects=='effect5' ){
    
            $output .= '<div class="ih-item circle effect5 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info">
                                <div class="info-back" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></div></a></div>';
        }        
 

        if ( $style=='circle' && $circle_effects=='effect6' ){
    
            $output .= '<div class="ih-item circle effect6 scale_down_up '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='circle' && $circle_effects=='effect7' ){
    
            $output .= '<div class="ih-item circle effect7 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info">
                                <div class="info-back" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></div></a></div>';
        }
        
        if ( $style=='circle' && $circle_effects=='effect8' ){
    
                        $output .= '<div class="ih-item circle effect8 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                                <div class="img-container">
                                                                    <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                                                </div>
                                                                <div class="info-container">
                                                                    <div class="info" style="background:'.$color.'">
                                                                        <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font.'px; color:'.$heading_color.';">'.$title.'</h3>
                                                                        <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                                                                    </div>
                                </div></a></div>';
        }        
        
        if ( $style=='circle' && $circle_effects=='effect9' ){
    
            $output .= '<div class="ih-item circle effect9 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }
                
        if ( $style=='circle' && $circle_effects=='effect10' ){
    
            $output .= '<div class="ih-item circle effect10 top_to_bottom '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }      
          
        if ( $style=='circle' && $circle_effects=='effect11' ){
    
            $output .= '<div class="ih-item circle effect11 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }        
        
        if ( $style=='circle' && $circle_effects=='effect12' ){
    
            $output .= '<div class="ih-item circle effect12 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='circle' && $circle_effects=='effect13' ){
    
            $output .= '<div class="ih-item circle effect13 from_left_and_right '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info">
                                <div class="info-back" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></div></a></div>';
        }
        
        if ( $style=='circle' && $circle_effects=='effect14' ){
    
            $output .= '<div class="ih-item circle effect14 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }        
        
        if ( $style=='circle' && $circle_effects=='effect15' ){
    
            $output .= '<div class="ih-item circle effect15 left_to_right '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }        
        
        if ( $style=='circle' && $circle_effects=='effect16' ){
    
            $output .= '<div class="ih-item circle effect16 left_to_right '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }         
        
        if ( $style=='circle' && $circle_effects=='effect17' ){
    
            $output .= '<div class="ih-item circle effect17 '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }         
        
        if ( $style=='circle' && $circle_effects=='effect18' ){
    
            $output .= '<div class="ih-item circle effect18 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info">
                                <div class="info-back" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></div></a></div>';
        }    
            
        if ( $style=='circle' && $circle_effects=='effect19' ){
    
            $output .= '<div class="ih-item circle effect19 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="box-shadow:none; width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }        

        if ( $style=='circle' && $circle_effects=='effect20' ){
    
            $output .= '<div class="ih-item circle effect20 '.$animation.' '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_width.'px;background:'.$color.'"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="width:'.$image_width.'px; height:'.$image_width.'px;"><img src="'.$image[0].'"></div>
                                    <div class="info">
                                <div class="info-back" style="background:'.$color.'">
                                <h3 style="letter-spacing: 0px; margin-top: '.$move_texts.'px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; border-top: '.$remove_underline.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></div></a></div>';
        }        
        
        if ( $style=='square' && $square_effects=='effect1' ){
    
            $output .= '<div class="ih-item square effect1 left_and_right '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }        
        
        if ( $style=='square' && $square_effects=='effect2' ){
    
            $output .= '<div class="ih-item square effect2 '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }        

        if ( $style=='square' && $square_effects=='effect3' ){
    
            $output .= '<div class="ih-item square effect3 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect4' ){
    
            $output .= '<div class="ih-item square effect4 '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                            <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                            <div class="mask1" style="position: absolute; height: '.$image_height.'px; width: '.$image_width.'px;; left: auto; right: 0px; top: 0px;"></div>
                            <div class="mask2" style="position: absolute; height: '.$image_height.'px; width: '.$image_width.'px; top: auto; bottom: 0px; left: 0px;"></div>
                            <div class="info" style="background:'.$color.'">
                              <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                              <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect5' ){
    
            $output .= '<div class="ih-item square effect5 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect6' ){
    
            $output .= '<div class="ih-item square effect6 from_top_and_bottom '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect7' ){
    
            $output .= '<div class="ih-item square effect7 '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }
        
        if ( $style=='square' && $square_effects=='effect8' ){
    
            $output .= '<div class="ih-item square effect8 scale_up '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }
        
        if ( $style=='square' && $square_effects=='effect9' ){
    
            $output .= '<div class="ih-item square effect9 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" style="height: '.$image_height.'px; background:'.$color.'"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info">
                                    <div class="info-back"  style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></div></a></div>';
        }
        
        if ( $style=='square' && $square_effects=='effect10' ){
    
            $output .= '<div class="ih-item square effect10 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect11' ){
    
            $output .= '<div class="ih-item square effect11 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }
        
        if ( $style=='square' && $square_effects=='effect12' ){
    
            $output .= '<div class="ih-item square effect12 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect13' ){
    
            $output .= '<div class="ih-item square effect13 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect14' ){
    
            $output .= '<div class="ih-item square effect14 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect15' ){
    
            $output .= '<div class="ih-item square effect15 '.$animation.' '.$css_class.'" style="background:'.$color.'; height: '.$image_height.'px; width: '.$image_width.'px;"><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img style="height: '.$image_height.'px; width: '.$image_width.'px;" src="'.$image[0].'"></div>
                                    <div class="info" style="background:'.$color.'">
                                <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; margin-top: '.$move_texts.'px">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square2' && $square2_effects=='effect1' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-circle ahe-square-teal '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';" >'.$title.'</h1>
                        </div></a>';
        }

        if ( $style=='square2' && $square2_effects=='effect2' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-circle strawberry '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }

        if ( $style=='square2' && $square2_effects=='effect3' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-circle grape '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }

        if ( $style=='square2' && $square2_effects=='effect4' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-circle orange '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }
        
        if ( $style=='square2' && $square2_effects=='effect5' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-rumb ahe-square-teal '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }
        
        if ( $style=='square2' && $square2_effects=='effect6' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-rumb strawberry '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }
        
        if ( $style=='square2' && $square2_effects=='effect7' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-rumb grape '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }
        
        if ( $style=='square2' && $square2_effects=='effect8' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-rumb orange '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }
        
        if ( $style=='square2' && $square2_effects=='effect9' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-up ahe-square-teal '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }
        
        if ( $style=='square2' && $square2_effects=='effect10' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-up strawberry '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }
        
        if ( $style=='square2' && $square2_effects=='effect11' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-up grape '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }
        
        if ( $style=='square2' && $square2_effects=='effect12' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-up orange '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }
        
        if ( $style=='square2' && $square2_effects=='effect13' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-side ahe-square-teal '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }
        
        if ( $style=='square2' && $square2_effects=='effect14' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-side strawberry '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }
        
        if ( $style=='square2' && $square2_effects=='effect15' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-side grape '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }        
        
        if ( $style=='square2' && $square2_effects=='effect16' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="burst-side orange '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }         
        
        if ( $style=='square2' && $square2_effects=='effect17' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="triangle ahe-square-teal '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }        
        
        if ( $style=='square2' && $square2_effects=='effect18' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="triangle strawberry '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }        
        
        if ( $style=='square2' && $square2_effects=='effect19' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="triangle grape '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }        
        
        if ( $style=='square2' && $square2_effects=='effect20' ){
    
            $output .= '<a class="square2_link" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                        <div id="square-box" class="triangle orange '.$css_class.'" style="height: '.$image_height.'px; width: '.$image_width.'px;">
                            <div class="ahe-square"></div>
                            <img src="'.$image[0].'">
                            <h1 style="top: '.$move_texts.'%; font-family: '.$font.'; font-size: '.$heading_font_size.'px;" >'.$title.'</h1>
                        </div></a>';
        }        
        
        
        
        
        
        if ( $style=='caption' && $caption_effects=='effect1' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption spaceoutleft-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }     
           
        if ( $style=='caption' && $caption_effects=='effect2' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption spaceoutup-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect3' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption spaceoutdown-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect4' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption spaceoutright-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        } 
        
        if ( $style=='caption' && $caption_effects=='effect5' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                <div class="caption flip-image-horizontal captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect6' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                <div class="caption flip-image-horizontal captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }
        

        if ( $style=='caption' && $caption_effects=='effect7' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                <div class="caption page-turn-from-top captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }       
        
                
        if ( $style=='caption' && $caption_effects=='effect8' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                <div class="caption page-turn-from-bottom captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect9' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption swap-caption captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect10' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption rotateup-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        } 
        
        
        if ( $style=='caption' && $caption_effects=='effect11' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption rotatedown-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect12' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption fall-down-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect13' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption zoom-image-out-caption-twist captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }                        

        if ( $style=='caption' && $caption_effects=='effect14' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption opendoorup-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect15' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption tinright-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }

        if ( $style=='caption' && $caption_effects=='effect16' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption rotateleft-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }

        if ( $style=='caption' && $caption_effects=='effect17' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption opendoorleft-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }

        if ( $style=='caption' && $caption_effects=='effect18' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption simple-fade captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }

        if ( $style=='caption' && $caption_effects=='effect19' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption foolish-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }

        if ( $style=='caption' && $caption_effects=='effect20' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" style="width:'.$image_width.'px; height:'.$image_height.'px;box-shadow: 1px 2px 2px #cacaca;border-radius: ;">

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption opendoorright-image captiontext" style="width:'.$image_width.'px; height:'.$image_height.'px; background-color: '.$color.'; color: ; opacity: ;">
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3 style="letter-spacing: 0px; margin-top: 0px; font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';">'.$title.'</h3>
                                <p style="font-family: '.$font.'; font-size: '.$desc_font_size.'px; color:'.$desc_color.';">'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style="width:'.$image_width.'px; height:'.$image_height.'px; transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }



           
        
    return $output;
 }




add_shortcode('hvc-hover', 'hvc_shortcoe');
<?php
/*
Plugin Name: MOR Custom Post REST API
Description: Add image url to post REST Api.
*/

function ws_register_images_field() {
    register_rest_field( 
        'post',
        'images',
        array(
            'get_callback'    => 'ws_get_images_urls',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

add_action( 'rest_api_init', 'ws_register_images_field' );

function ws_get_images_urls( $object, $field_name, $request ) {
    $postId = $object['id'];

    $thumbnailId = get_post_thumbnail_id( $postId );

    $media   = get_attached_media('image/jpeg', $postId);
    $media   = reset($media);
    $mediaId = $media->ID;

    $imageId = $thumbnailId ?: $mediaId;

    $thumbnail  = wp_get_attachment_image_src($imageId, 'thumbnail');
    $medium     = wp_get_attachment_image_src($imageId, 'medium');
    $large      = wp_get_attachment_image_src($imageId, 'large');

    return array(
        'thumbnail' => createAttachmentAssociateArray($thumbnail),
        'medium'    => createAttachmentAssociateArray($medium),
        'large'     => createAttachmentAssociateArray($large)
    );
}

function createAttachmentAssociateArray($attachment)
{
    return array(
        'link'   => $attachment['0'],
        'width'  => $attachment['1'],
        'height' => $attachment['2']
    );
}
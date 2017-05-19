<?php

namespace ginomessmer\RedditAPI\Models;

class RedditSubmission
{
	public $contest_mode; // boolean
    public $subreddit_name_prefixed; // String
    public $banned_by; // object
    public $media_embed; // MediaEmbed
    public $thumbnail_width; // object
    public $subreddit; // String
    public $selftext_html; // String
    public $selftext; // String
    public $likes; // object
    public $suggested_sort; // String
    public $user_reports; // array(Object)
    public $secure_media; // object
    public $link_flair_text; // String
    public $id; // String
    public $view_count; // object
    public $secure_media_embed; // SecureMediaEmbed
    public $clicked; // boolean
    public $report_reasons; // array(Object)
    public $author; // String
    public $saved; // boolean
    public $mod_reports; // array(Object)
    public $name; // String
    public $score; // int
    public $approved_by; // String
    public $over_18; // boolean
    public $domain; // String
    public $hidden; // boolean
    public $preview; // Preview
    public $thumbnail; // String
    public $subreddit_id; // String
    public $edited; // int
    public $link_flair_css_class; // String
    public $author_flair_css_class; // object
    public $gilded; // int
    public $downs; // int
    public $brand_safe; // boolean
    public $archived; // boolean
    public $removal_reason; // object
    public $post_hint; // String
    public $visited; // boolean
    public $can_gild; // boolean
    public $thumbnail_height; // object
    public $removed; // boolean
    public $approved; // boolean
    public $hide_score; // boolean
    public $spoiler; // boolean
    public $permalink; // String
    public $num_reports; // int
    public $locked; // boolean
    public $stickied; // boolean
    public $created; // int
    public $url; // String
    public $author_flair_text; // object
    public $quarantine; // boolean
    public $spam; // boolean
    public $created_utc; // int
    public $distinguished; // object
    public $media; // object
    public $ignore_reports; // boolean
    public $num_comments; // int
    public $is_self; // boolean
    public $title; // String
    public $subreddit_type; // String
    public $ups; // int

	public function map(array $data)
	{
		foreach($data as $key => $val)
		{
			if(property_exists(__CLASS__, $key))
			{
				$this->$key = $val;
			}
		}
	}
}
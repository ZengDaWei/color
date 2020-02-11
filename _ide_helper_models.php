<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Category
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $hot
 * @property int $count_posts
 * @property int $count_videos
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $time_ago
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel off()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel on()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCountPosts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCountVideos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\Post
 *
 * @property int $id
 * @property string|null $description 描述
 * @property int $user_id 作者
 * @property string|null $content 内容
 * @property int $status 1-online -1-offline
 * @property int $type
 * @property int $category_id
 * @property int $hot 热度
 * @property int $count_likes 点赞数
 * @property int $count_comments 点赞数
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read mixed $time_ago
 * @property-read \App\Image $image
 * @property-read \App\User $user
 * @property-read \App\Video $video
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel off()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel on()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereCountComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereCountLikes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereUserId($value)
 */
	class Post extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name nickname
 * @property int $gender 1-unknown 2-man 3-woman
 * @property string|null $account
 * @property string|null $phone user phone number
 * @property string|null $email user email address
 * @property string|null $jwt json web token
 * @property int $status 1-online -1-offline
 * @property string|null $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $time_ago
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @property-read int|null $posts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Video[] $videos
 * @property-read int|null $videos_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User off()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User on()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereJwt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Video
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $relative_path 相对路径
 * @property string|null $absolute_path 绝对路径
 * @property string|null $hash file hash value
 * @property string|null $disk on which disk
 * @property string|null $type 类型
 * @property float|null $duration 时长
 * @property string|null $used_type
 * @property int|null $used_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $time_ago
 * @property-read \App\Video|null $used
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel off()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel on()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereAbsolutePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereRelativePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereUsedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereUsedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Video whereUserId($value)
 */
	class Video extends \Eloquent {}
}

namespace App{
/**
 * App\Comment
 *
 * @property int $id
 * @property int $user_id 用户ID
 * @property int|null $comment_id 评论ID
 * @property string|null $content 内容
 * @property string $commented_type
 * @property int $commented_id
 * @property int $count_likes 点赞数
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Comment|null $comment
 * @property-read \App\Comment $commented
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read mixed $time_ago
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel off()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel on()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereCommentedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereCommentedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereCountLikes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereUserId($value)
 */
	class Comment extends \Eloquent {}
}

namespace App{
/**
 * App\Profile
 *
 * @property int $id
 * @property int $user_id 用户ID
 * @property string|null $address 用户位置信息
 * @property string $ip
 * @property string $source 来源
 * @property string $introduction 介绍
 * @property string|null $birthday 生日
 * @property string|null $version
 * @property string|null $device_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $time_ago
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel off()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel on()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereIntroduction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereVersion($value)
 */
	class Profile extends \Eloquent {}
}

namespace App{
/**
 * App\Device
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $name
 * @property string|null $ip
 * @property string|null $os
 * @property string|null $version
 * @property string|null $position
 * @property string|null $uuid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $time_ago
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel off()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel on()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereOs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Device whereVersion($value)
 */
	class Device extends \Eloquent {}
}

namespace App{
/**
 * App\Image
 *
 * @property int $id
 * @property int $user_id 用户ID
 * @property string|null $hash 哈希值
 * @property string|null $path 路径
 * @property int|null $width 宽
 * @property int|null $height 高
 * @property string|null $extension 扩展名
 * @property string $used_type
 * @property int $used_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $time_ago
 * @property-read \App\Image $used
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel off()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BaseModel on()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereUsedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereUsedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereWidth($value)
 */
	class Image extends \Eloquent {}
}


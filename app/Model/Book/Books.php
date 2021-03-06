<?php

namespace App\Model\Book;

use App\Model\BaseModel;

class Books extends BaseModel
{
    protected $table = "tbl_books_master";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'user_id', 'title', 'authors', 'contents', 'isbn', 'publisher', 'thumbnail', 'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // 'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
    ];

    /**
     * 관계 설정. 자기가 등록한 책
     *
     * @return void
     */
    public function users_book()
    {
        return $this->hasOne('App\Model\Book\UsersBooks', 'id', 'book_id');
    }

    /**
     * 관계 읽었는지 아닌지. 체크..
     *
     * @return void
     */
    public function user_read()
    {
        return $this->hasOne('App\Model\Book\UserReadBooks', 'book_id', 'id');
    }

    /**
     * 관계 추천 도서.
     *
     * @return void
     */
    public function recommand_book()
    {
        return $this->hasOne('App\Model\Book\RecommendBooks', 'id', 'book_id');
    }

    /**
     * 관계 추천 도서.
     *
     * @return void
     */
    public function recommend()
    {
        return $this->hasOne('App\Model\Book\RecommendBooks', 'book_id', 'id');
    }

    /**
     * 사용자 정보
     *
     * @return void
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}

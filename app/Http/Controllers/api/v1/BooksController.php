<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\api\BaseController;
use Illuminate\Http\Request;

use App\Repositories\v1\BooksRepository;

class BooksController extends BaseController
{
    protected $books;

    public function __construct(BooksRepository $books)
    {
        $this->books = $books;
    }

    public function create()
    {
        return __FUNCTION__;
    }

    public function index()
    {
        return __FUNCTION__;
    }

    public function update()
    {
        return __FUNCTION__;
    }

    public function delete()
    {
        return __FUNCTION__;
    }

    /**
     * 추천 도서 목록.
     *
     * @return void
     */
    public function recommend()
    {
        $task = $this->books->setRecommendBooks();

        if($task['state']) {
            return BaseController::defaultListSuccessResponse($task['data']);
        } else {
            return BaseController::defaultCreateFailResponse($task['message']);
        }
    }
}

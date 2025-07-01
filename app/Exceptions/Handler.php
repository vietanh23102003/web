<?php

namespace App\Exceptions;

// Đảm bảo import Throwable thay vì chỉ Exception cho các phiên bản Laravel mới
use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password', // Thường có trong Laravel mới
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        // Định nghĩa cách báo cáo các exception (ví dụ: gửi đến dịch vụ log)
        $this->reportable(function (Throwable $e) {
            // Bạn có thể thêm logic báo cáo tùy chỉnh ở đây
            // Ví dụ: Log::error('Lỗi ứng dụng: ' . $e->getMessage());
        });

        // Bạn cũng có thể đăng ký cách render các exception (ví dụ: trả về JSON cho API)
        // $this->renderable(function (Throwable $e, Request $request) {
        //     if ($request->is('api/*')) {
        //         return response()->json([
        //             'message' => $e->getMessage()
        //         ], 500);
        //     }
        // });
    }

    // Xóa các phương thức report() và render() cũ nếu chúng tồn tại như sau:
    // protected $dontReport = [
    //     //
    // ];
    // public function report(Exception $exception)
    // {
    //     parent::report($exception);
    // }
    // public function render($request, Exception $exception)
    // {
    //     return parent::render($request, $exception);
    // }
}
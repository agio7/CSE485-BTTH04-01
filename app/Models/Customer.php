<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Nếu bạn muốn khai báo các cột cho phép nhập liệu, bạn có thể làm như sau:
    protected $fillable = ['email', 'password', 'status', 'account_type', 'last_login'];
}

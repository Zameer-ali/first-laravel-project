<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Const_;

class User extends Model
{
    use HasFactory;
    public const ROLE_CUSTOMER      = "customer";
    public const ROLE_SELLER        = "seller";
    public const ROLE_PROFESSIONAL  = "professional";

    public const EMAIL_VERIFIED     = "verified";
    public const EMAIL_NOT_VERIFIED = "not verified";

    public const APPROVED           = "approved";
    public const NOT_APPROVED       = "not approved";
    public const PENDING            = "pending";
    
    public const ACTIVE             = "active";
    public const DELETED            = "deleted";
}

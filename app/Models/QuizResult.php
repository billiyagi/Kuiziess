<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizResult extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'quiz_results';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'lesson_id', 'user_id', 'score'];

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use PDO;

class Task extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function pretvoriUMinute($sati, $minuta){
        return $sati * 60 + $minuta;
    }
    public function formatirajTrajanje(){
        $sat = floor($this->trajanje/60);
        if ($sat<10) $sat = "0".$sat;

        $min = ($this->trajanje % 60);
        if($min<10){
            $min = "0" . $min;
        }

        return "$sat:$min";
    }
    
    public function setTrajanje($sati, $minuta){
        $this->trajanje = $this->pretvoriUMinute($sati, $minuta);
    }
}

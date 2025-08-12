<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id','fecha','servicio'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}

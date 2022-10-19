<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
   
    protected $fillable = ['id',  'name', 'tipo_identificaciones_id',  'password',  'identificacion',  'email',
]; // Permite hacer la asignacion masiva

    protected $allowIncluded = ['posts', 'posts.user']; // Lista con las posibles relaciones que podemos enviar a travez de la URL

    protected $allowFilter = ['id',  'name', 'tipo_identificaciones_id',  'password',  'identificacion',  'email'];

    protected $allowSort = ['id',  'name', 'tipo_identificaciones_id',  'password',  'identificacion',  'email'];

    //relacion uno a muchos
    public function posts()
    {
        return $this->hasMany(User::class);
    }
    /////////////////////////////////////////////////////////////////////////////
    public function scopeIncluded(Builder $query)
    {

        if (empty($this->allowIncluded) || empty(request('included'))) {
            return;
        }
        $relations = explode(',', request('included')); //['posts','relation2']
        //return $relations;

        $allowIncluded = collect($this->allowIncluded); //colocamos en una colecion lo que tiene $allowIncluded en este caso = ['posts','posts.user']
       // return $allowIncluded;
        foreach ($relations as $key => $relationship) { //recorremos el array de $relations y los guardamos en una variable llamada relationship

            if (!$allowIncluded->contains($relationship)) { // si un elemento de la variable allowIncluded no esta dentro de $relationship 
                unset($relations[$key]);
            }
        } //
        // return $relations;
        $query->with($relations); //se ejecuta el query con lo que tiene $relations y que son los valores permitidos      
    }                                    // por la variable allowIncluded                               
    //////////////////////

    public function scopeFilter(Builder $query)
    {

        if (empty($this->allowFilter) || empty(request('filter'))) {
            return;
        }

        $filters = request('filter');
        $allowFilter = collect($this->allowFilter);

        foreach ($filters as $filter => $value) {
            if ($allowFilter->contains($filter)) {

                //$query->where($filter, $value);
                $query->where($filter,'LIKE','%'.$value.'%');
            }
        }
    }


    public function scopeSort(Builder $query)
    {

        if (empty($this->allowSort) || empty(request('sort'))) {
            return;
        }

        $sortFields = explode(',',request('sort')) ;
        $allowSort = collect($this->allowSort);

        foreach ($sortFields as $sortField) {
            
            if ($allowSort->contains($sortField)) {
                $query->orderBy($sortField,'asc');
               }
        }
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function setPasswordAttribute($password) {

        $this->attributes['password'] = bcrypt($password);
}

//RELACIONES
    //uno a muchos inversa

public function tipo_identificaciones(){
    return $this->belongsTo('App\Models\Tipo_identificacion');
}
    

 //uno a uno
    public function perfil(){
        return $this ->HasOne('App\Models\Perfil'); 
    }
 //uno a muchos
   public function blogs(){
    return $this->hasMany('App\Models\Blog');
   }
    public function products(){
        return $this->hasMany('App\Models\Product');
 }
}

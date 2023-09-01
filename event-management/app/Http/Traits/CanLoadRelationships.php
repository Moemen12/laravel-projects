<?php

namespace App\Http\Traits;

use Illuminate\Contracts\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait CanLoadRelationships
{

    public function loadRelationships(
        Model|QueryBuilder|EloquentBuilder|HasMany $for,
        ?array $relations = null
    
    ) :Model|QueryBuilder|EloquentBuilder|HasMany
    {
        $relations = $relations ?? $this->relations ?? []; // ['user']
        foreach($relations as $relation){
            $for->when(
                $this->shouldIncludeRelations($relation),
                fn($q)=> $for instanceof Model ? $for->load($relation) : $q->with($relation)
            );
         }

         return $for;  

    }

    protected function shouldIncludeRelations(string $relation):bool
    {
       $include = request()->query('include'); //user

       if(!$include){
         return false;
       }

       $relations= array_map('trim',explode(',',$include)); // ['user']
      // return in_array($relation,['user']); 
       return in_array($relation,$relations);
    }



}
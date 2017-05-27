namespace AppScopes;
 
use Illuminate\Database\EloquentScope;
use Illuminate\Database\EloquentModel;
use Illuminate\Database\EloquentBuilder;
 
class FinishScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  Illuminate\Database\EloquentBuilder  $builder
     * @param  Illuminate\Database\EloquentModel  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        return $builder->where('nombremedicamento','amen');
    }
}
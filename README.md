# Laravel-Paginate-Array
Laravel Paginate Array
## How to use
 ```
  use App\ResolvePaginate;
  Class ...
  public function paginateAfter()
  {
    $users = User::all();
   /**
   $users = [
      {id:15,name:"Joih Mister",email:"joinmm5@gmail.com",...},
      ...
      ...
    ];
    */
    $users = array_filter($users,"filterByAI");
    $userPaginate = new ResolvePaginate($users,5,2)
    return $userPaginate->paginate();
  }
  ...
  ```


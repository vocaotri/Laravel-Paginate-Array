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
    /**
     List param:
     1. data
     2. number of item per page.
     3. current page.
     4. option.
     Custom url current ['path' => url()->current()]
     Ex: new ResolvePaginate($users,5,2,['path' => url()->current()])
    */
    $userPaginate = new ResolvePaginate($users,5,2)
    return $userPaginate->paginate();
  }
  ...
  ```


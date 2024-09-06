<?php  

namespace App\Http\Helpers;
use Illuminate\Support\Carbon;

class FilterQuery
{

    public static function applyFiltersGeneral($query,$request)
    {

       
       $filter_search = $request->input('filter_search', []);
       $filter_search_or = $request->input("filter_search_or", []);
       $sort = $request->input('sort');

       if(!empty($filter_search))
       {
           foreach ($filter_search as $field => $value) {
               $query->where($field, "like", "%" . $value . "%");
           }
           
       }

       if(!empty($filter_search_or))
       {
           foreach ($filter_search_or as $field => $value) {
               $query->orWhere($field, "like", "%" . $value . "%");
           }
       }

           return $query->orderBy('id', $sort);
   }


    public static function applyFilterPlayer($query,$request)
     {

        $sort = $request->sort_by;
        // $filter_by_drop_down = $request->input('filter_by_drop_down');
        $start_date = $request->input('start_date', now()->toDateString());
        $end_date = $request->input('end_date', now()->toDateString());
       
        self::filterByCheckbox($query, $request);

      

        if(!empty($start_date) && !empty($end_date))
        {
         // Filter berdasarkan tanggal join
         $query->whereDate('join_date', '>=', $start_date)
         ->whereDate('join_date', '<=', $end_date);
        }

        //  if(!empty($filter_by_drop_down) )
        //   {
        //       return $query->orderBy($filter_by_drop_down, $sort);
        //   }else{
        //     return $query->orderBy('id', $sort);
        //   }

          return $query->orderBy('id', $sort);
    }

    private static function filterByCheckbox($query, $request)
    {
        if($request->new_player == true && $request->non_new_player == true)
        {
        }else{
            if ($request->new_player == true) {
                $query->where('total_deposit', 0); // Menampilkan pemain baru dengan total_deposit 0
            }
            
            if ($request->non_new_player == true) {
                $query->where('total_deposit', '>', 0); // Menampilkan pemain bukan baru dengan total_deposit lebih dari 0
            }
        }
        
        if ($request->player_with_referral == true) {
            $query = $query->whereHas('referredPlayers');
        }
        
        if ($request->player_without_bank == true) {
            $query = $query->doesNotHaveBank();
        }

      return $query;
    }
}

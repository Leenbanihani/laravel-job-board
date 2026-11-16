 @props(['active'=> false])
 
 @php
                
    $current="text-indigo-600 font-semibold";
     $default="hover:text-indigo-600";
 @endphp

  <a class={{ $active ? $current : $default }} {{ $attributes }}>{{ $slot }}</a>


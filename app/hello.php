<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hello extends Model
{
	//protected $table='users';

	@for($i=0;$i<10:$i++)

	{{ $i ,}}

	@endfor;
}

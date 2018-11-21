<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
  public $table='card';
  public $timestamps=false;
  public $fillable=['id','made'];
}
//1. 기존에 3개의 row가 들어있었다
//2. 처음에 넣다가 멈췄었다
//3. 그 뒤로 다시 import하니까 중복된 키값들이 많다면서 failed했다고 나왔다.
//4. 테이블을 삭제하고 빈 테이블에서 import하는게 제일 좋다고 생각했다.
//5. 테이블 만들던 script를 삭제하고 initial migrate에다가 테이블을 만들어주고
//   migrate했더니 내가 지웠던 script를 찾을 수가 없다고 에러가 났다.
//6. 그래서 initial migrate에 추가해던 코드를 전부 지우고 지웠던 script를 복구했다.
//7. php artisan migrate: rollback했더니 롤백이 되었다.

//mysql에서 card테이블을 drop했다.

//최종적으로 해야될거같은거
//1. eos-poker DB를 삭제
//2. initial_migrate.php에다가 cards라는 테이블도 생성
//3. import하기

//위 방법으로 하면 문제가 생기나?

<?php
namespace App\Http\Controllers\Api;
use WebService\Service\Image\ImageService;
use Illuminate\Http\Request;
use Extention\Media;
use Extention\Api;
/**
 * Created by SublimeText.
 * User: Huynh
 * Date: 18/12/2017
 * Time: 15:00
 */
class ImageController extends \App\Http\Controllers\WebApiController
{  
   /**
   * search image by keyword
   * @param  Request $request
   * @return Response
   */ 
  public function actionFind($search = '', Request $request)
  { 
    $res = ImageService::getInstance()->find($request); 
    if(!isset($res['errors'])) {
      return Api::response([ 'data' => $res['data']]);
    }else {
      return Api::response([ 
        'is_success' => false,
        'status_code' => $res['errors']['status_code'],
        'errors' => $res['errors']['msg']
      ]);
    }
  }
  /**
   *  search image by id_image
   * @param  $id
   * @return Response
   */

  public function actionFindOne($id)
  {   
    $res = ImageService::getInstance()->FindOne($id);
    if(!isset($res['errors'])) {
      return Api::response([ 'data' => $res['data'] ]);
    } else {
      return Api::response([ 
        'is_success' => false,
        'status_code' => $res['errors']['status_code'],
        'errors' => $res['errors']['msg']
      ]);
    }
  }

  /**
   * save new image 
   *
   * @param  Request $request
   * @return Response
   */
  public function actionSave(Request $request)
  {  
    $resImage = ImageService::getInstance()->save($request);
    if(!isset($resImage['errors'])) {
      return Api::response(['data' => $resImage['data'] ])   ;
    } else {
      return Api::response([
        'is_success' => false,
        'errors' => $resImage['errors']['msg'],
        'status_code' => $resImage['errors']['status_code'],
      ])  ;
    }
  }
  /**
   * update  image 
   * @param  Request $request
   * @param  $id
   * @return Response
   */
  public function actionUpdate(Request $request, $id)
  {   
    
  }
  /**
   * delete image 
   * @param  $id
   * @return Response
   */
  public function actionDelete($id)
  {   
    $res =  ImageService::getInstance()->delete($id);
    if(!isset($res['errors'])) {
      return Api::response([ 'data' => $res['data'], 'status_code' => 204]);
    }else {
      return Api::response([ 
        'is_success' => false,
        'status_code' => $res['errors']['status_code'],
        'errors' => $res['errors']['msg']
      ]);
    }
  }
}
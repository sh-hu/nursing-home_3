<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * Items Controller
 *
 * @method \App\Model\Entity\Facility[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FacilitiesController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        //itemsのDBを指定
        $this->facilities = TableRegistry::get('Facilities');
    }

    public function index()
    {
        $facilities = $this->facilities
                            ->find()
                            ->order(['id' => 'DESC']);
        // デバッグを取りたい場合はtoArray()を使うと、DBbのデータのみ抽出できる
        dd($facilities->toArray());
        $this->set(compact('facilities'));
    }

    public function view($slug = null)
    {
        $facilities = $this->Facilities->findBySlug($slug)->firstOrFail();
        $this->set(compact('facility'));
    }   


}
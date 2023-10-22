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
        // dd($facilities->toArray());
        $this->set(compact('facilities'));
    }

    public function view($id = null)
    {
        $facility = $this->facilities->get($id);
        $this->set(compact('facility'));
    }

    public function add()
    {
        $facility = $this->Facilities->newEmptyEntity();
        if ($this->request->is('post')) {
            $facility = $this->Facilities->patchEntity($facility, $this->request->getData());

            // user_id の決め打ちは一時的なもので、あとで認証を構築する際に削除されます。
            $facility->id = 1;

            if ($this->Facilities->save($facility)) {
                $this->Flash->success(__('Your facility has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your facility.'));
        }
        $this->set('facility', $facility);
    }


}
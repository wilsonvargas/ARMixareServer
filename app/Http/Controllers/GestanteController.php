<?php

namespace App\Http\Controllers;

use App\Entities\Gestante;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use LaravelDoctrine\ORM\Facades\EntityManager;

class GestanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entity = EntityManager::getRepository(Gestante::class);
        $gestantes = $entity->findAll();
        $results = array();
        foreach ($gestantes as $entity) {
            /** @var Gestante $entity */
            $results[] = array(
                "id" => $entity->getId(),
                "lat" => $entity->getLat(),
                "lng" => $entity->getLng(),
                "elevation" => 0.0,
                "title" => $entity->getTitle(),
                "webpage" => null,
                "has_detail_page" => 0,
                "image" => "https://www.gravatar.com/avatar/3544142bb4ef8f597b1c14b887b0b905?s=250&d=mm&r=x"
            );
        }
        $datos = array(
            "status" => "OK",
            "num_results" => count($results),
            "results" => $results,

        );

        //$data = $this->getSerializer()->serialize($gestantes, "json");
        return new Response($datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function getSerializer()
    {
        return $this->get('jms_serializer');
    }
}

<?php

namespace App\Models;

use GuzzleHttp\Client;
use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/akademik/',
            'api_key' => '151d13f02b497bc6d5e92b69aacc296f0d6ea862'
        ]);
    }


    public function getAllMahasiswa()
    {
        //return $this->db->get('mahasiswa')->result_array();
        $response = $this->_client->request('GET', 'mahasiswa', [
            'query' => [
                'api_key' => '151d13f02b497bc6d5e92b69aacc296f0d6ea862'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data_person'];
    }

    public function getMahasiswaById($id)
    {
        $response = $this->_client->request('GET', 'mahasiswa', [
            'query' => [
                'api_key' => '151d13f02b497bc6d5e92b69aacc296f0d6ea862',
                'NIM' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data_person'][0];
    }

    public function postDataMahasiswa($data)
    {
        $response = $this->_client->request('POST', 'mahasiswa', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataMahasiswa($id)
    {
        $response = $this->_client->request('DELETE', 'mahasiswa', [
            'form_params' => [
                'NIM' => $id,
                'api_key' => '151d13f02b497bc6d5e92b69aacc296f0d6ea862'
            ]
        ]);
        return $response;
    }
    public function EditDataMahasiswa($data)
    {
        $response = $this->_client->request('PUT', 'mahasiswa', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}

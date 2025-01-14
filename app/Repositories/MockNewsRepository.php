<?php

namespace App\Repositories;

use App\Interfaces\NewsRepositoryInterface;

class MockNewsRepository implements NewsRepositoryInterface {

    private $news = array(
        [
            'id' => 0,
            'title' => 'Observatorio de Cambio Climatico de la Macaronesia',
            'tags' => array('acciones informátivas', 'cambio climático'),
            'short_description' => 'Investigadores demuestran mejoras en la calidad del código y la productividad del desarrollador.',
            'date' => '01/11/2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fringilla, tellus lobortis scelerisque eleifend, orci ligula malesuada magna, a suscipit elit urna nec diam. Curabitur ut luctus nisi. Curabitur vehicula tortor a turpis accumsan pulvinar. Vivamus malesuada sodales risus, ac molestie sem feugiat ut. Etiam efficitur ligula sit amet libero laoreet placerat. Nulla vel dui tortor. Maecenas pretium diam ut nulla auctor, nec posuere est maximus. Cras efficitur tincidunt ligula eget bibendum. Phasellus et vehicula libero. Fusce et nunc laoreet, imperdiet nisl eu, congue nunc.            Morbi id scelerisque augue, in sagittis tellus. Mauris leo ipsum, venenatis hendrerit ex posuere, convallis tincidunt risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean auctor rutrum leo, a pulvinar lacus suscipit nec. Vestibulum lacinia risus sit amet efficitur malesuada. Praesent ut tortor egestas, aliquam nisi quis, molestie turpis. Fusce id nisl feugiat, maximus est ut, sodales eros. Aliquam posuere ultricies erat sed pellentesque. Nunc posuere diam et purus pharetra euismod. Quisque luctus lectus non est pretium, eu blandit dui imperdiet. Duis iaculis sem vel turpis scelerisque bibendum. Sed quis metus nisi. Duis venenatis nec quam condimentum tincidunt. Quisque eleifend sed libero et pellentesque. Pellentesque non facilisis nunc, ac gravida nibh. Quisque dignissim tortor diam, non luctus turpis viverra vel.            Duis nunc odio, sagittis id nibh ut, tempus pellentesque libero. Nulla dictum tincidunt dui a accumsan. Ut efficitur quis nisl eu rutrum. Proin luctus est malesuada mi ultrices commodo. Integer egestas ullamcorper magna, quis commodo urna interdum ac. Nullam iaculis facilisis faucibus. Mauris pharetra magna nisl, in porta est condimentum sit amet. Quisque nec maximus urna. Vivamus et libero nec elit consequat blandit. Aenean in ultricies magna. Morbi congue faucibus velit, vitae laoreet lacus fringilla sit amet. Donec lobortis finibus sodales. Proin erat turpis, auctor eget lectus eget, mollis cursus dui.            Aenean elementum lacus quis erat rhoncus finibus. Curabitur ullamcorper elit ut tellus eleifend, vitae facilisis elit molestie. Maecenas posuere arcu sed egestas vehicula. Nam finibus accumsan ex, vitae vulputate massa dignissim nec. In porta pretium tellus, at scelerisque enim consectetur et. Nam risus erat, tempor nec libero a, mattis scelerisque ligula. Curabitur vel vestibulum justo, non mollis velit. Fusce velit lacus, hendrerit vel rutrum at, consequat eu ligula. Cras accumsan, arcu ut feugiat imperdiet, tellus risus feugiat risus, in laoreet ligula nisl sit amet odio. Phasellus vitae ipsum porta, iaculis leo at, sodales sapien. Duis quis ipsum dignissim, hendrerit odio ac, vehicula magna. Nullam vehicula consequat nulla ac mattis. Donec mattis metus in cursus fermentum. In interdum fringilla diam non faucibus. Donec posuere nisl metus, vel porta nisi malesuada eu. Donec ultricies nulla urna, eget mattis lacus fermentum at. Vestibulum id scelerisque est. Etiam odio nunc, semper in viverra non, cursus et ligula.',
            'image' => 'https://picsum.photos/300'
        ],
        [
            'id' => 1,
            'title' => 'Observatorio de Cambio Climatico de la Macaronesia',
            'tags' => array('acciones informátivas'),
            'short_description' => 'Primera reunión de Parternariado',
            'date' => '02/11/2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fringilla, tellus lobortis scelerisque eleifend, orci ligula malesuada magna, a suscipit elit urna nec diam. Curabitur ut luctus nisi. Curabitur vehicula tortor a turpis accumsan pulvinar. Vivamus malesuada sodales risus, ac molestie sem feugiat ut. Etiam efficitur ligula sit amet libero laoreet placerat. Nulla vel dui tortor. Maecenas pretium diam ut nulla auctor, nec posuere est maximus. Cras efficitur tincidunt ligula eget bibendum. Phasellus et vehicula libero. Fusce et nunc laoreet, imperdiet nisl eu, congue nunc.            Morbi id scelerisque augue, in sagittis tellus. Mauris leo ipsum, venenatis hendrerit ex posuere, convallis tincidunt risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean auctor rutrum leo, a pulvinar lacus suscipit nec. Vestibulum lacinia risus sit amet efficitur malesuada. Praesent ut tortor egestas, aliquam nisi quis, molestie turpis. Fusce id nisl feugiat, maximus est ut, sodales eros. Aliquam posuere ultricies erat sed pellentesque. Nunc posuere diam et purus pharetra euismod. Quisque luctus lectus non est pretium, eu blandit dui imperdiet. Duis iaculis sem vel turpis scelerisque bibendum. Sed quis metus nisi. Duis venenatis nec quam condimentum tincidunt. Quisque eleifend sed libero et pellentesque. Pellentesque non facilisis nunc, ac gravida nibh. Quisque dignissim tortor diam, non luctus turpis viverra vel.            Duis nunc odio, sagittis id nibh ut, tempus pellentesque libero. Nulla dictum tincidunt dui a accumsan. Ut efficitur quis nisl eu rutrum. Proin luctus est malesuada mi ultrices commodo. Integer egestas ullamcorper magna, quis commodo urna interdum ac. Nullam iaculis facilisis faucibus. Mauris pharetra magna nisl, in porta est condimentum sit amet. Quisque nec maximus urna. Vivamus et libero nec elit consequat blandit. Aenean in ultricies magna. Morbi congue faucibus velit, vitae laoreet lacus fringilla sit amet. Donec lobortis finibus sodales. Proin erat turpis, auctor eget lectus eget, mollis cursus dui.            Aenean elementum lacus quis erat rhoncus finibus. Curabitur ullamcorper elit ut tellus eleifend, vitae facilisis elit molestie. Maecenas posuere arcu sed egestas vehicula. Nam finibus accumsan ex, vitae vulputate massa dignissim nec. In porta pretium tellus, at scelerisque enim consectetur et. Nam risus erat, tempor nec libero a, mattis scelerisque ligula. Curabitur vel vestibulum justo, non mollis velit. Fusce velit lacus, hendrerit vel rutrum at, consequat eu ligula. Cras accumsan, arcu ut feugiat imperdiet, tellus risus feugiat risus, in laoreet ligula nisl sit amet odio. Phasellus vitae ipsum porta, iaculis leo at, sodales sapien. Duis quis ipsum dignissim, hendrerit odio ac, vehicula magna. Nullam vehicula consequat nulla ac mattis. Donec mattis metus in cursus fermentum. In interdum fringilla diam non faucibus. Donec posuere nisl metus, vel porta nisi malesuada eu. Donec ultricies nulla urna, eget mattis lacus fermentum at. Vestibulum id scelerisque est. Etiam odio nunc, semper in viverra non, cursus et ligula.',
            'image' => 'https://picsum.photos/300'
        ]
    );

    public function getAll(){
        return $this->news;
    }

    public function getById($id){
        foreach($this->news as $n){
            if($n['id'] == $id) {
                return $n;
            } 
        }
        return null;
    }
    public function create($data){
        return null;
    }
    public function update($id, $data){
        return null;
    }
    public function delete($id){
        return null;
    }
}
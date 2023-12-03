        <?php

        function userLogin()
        {
            $db = \Config\Database::connect();
            return $db->table('admin')->where('id', session('id'))->get()->getRow();
        }
        function totalAdmin()
        {
            $db = \Config\Database::connect();
            $userId = session('id');
            return $db->table('admin')->where('id', $userId)->countAllResults();
        }

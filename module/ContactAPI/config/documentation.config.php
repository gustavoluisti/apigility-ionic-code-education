<?php
return array(
    'ContactAPI\\V1\\Rest\\Contacts\\Controller' => array(
        'description' => 'Contacts service',
        'entity' => array(
            'description' => 'Single contact',
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts[/:contacts_id]"
       }
   }
   "name": "",
   "email": "",
   "phone": ""
}',
                'description' => 'list contacts',
            ),
            'PATCH' => array(
                'request' => '{
   "name": "",
   "email": "",
   "phone": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts[/:contacts_id]"
       }
   }
   "name": "",
   "email": "",
   "phone": ""
}',
                'description' => 'update contact',
            ),
            'PUT' => array(
                'request' => '{
   "name": "",
   "email": "",
   "phone": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts[/:contacts_id]"
       }
   }
   "name": "",
   "email": "",
   "phone": ""
}',
                'description' => 'insert contact',
            ),
            'DELETE' => array(
                'request' => '{
   "name": "",
   "email": "",
   "phone": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts[/:contacts_id]"
       }
   }
   "name": "",
   "email": "",
   "phone": ""
}',
                'description' => 'delete contact',
            ),
        ),
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts"
       },
       "first": {
           "href": "/contacts?page={page}"
       },
       "prev": {
           "href": "/contacts?page={page}"
       },
       "next": {
           "href": "/contacts?page={page}"
       },
       "last": {
           "href": "/contacts?page={page}"
       }
   }
   "_embedded": {
       "contacts": [
           {
               "_links": {
                   "self": {
                       "href": "/contacts[/:contacts_id]"
                   }
               }
              "name": "",
              "email": "",
              "phone": ""
           }
       ]
   }
}',
                'description' => 'list contacts',
            ),
            'POST' => array(
                'request' => '{
   "name": "",
   "email": "",
   "phone": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts[/:contacts_id]"
       }
   }
   "name": "",
   "email": "",
   "phone": ""
}',
                'description' => 'insert contact',
            ),
            'description' => 'Single contact',
        ),
    ),
);

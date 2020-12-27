<?php

return [
    'userManagement' => [
        'title'          => 'Gestione Utenti',
        'title_singular' => 'Gestione Utenti',
    ],
    'permission'     => [
        'title'          => 'Permessi',
        'title_singular' => 'Permesso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Titolo',
            'title_helper'      => '',
            'created_at'        => 'Created il',
            'created_at_helper' => '',
            'updated_at'        => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at'        => 'Cancellato il',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Ruoli',
        'title_singular' => 'Ruolo',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Titolo',
            'title_helper'       => '',
            'permissions'        => 'Permessi',
            'permissions_helper' => '',
            'created_at'         => 'Creato il',
            'created_at_helper'  => '',
            'updated_at'         => 'Aggiornato il',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Cancellato il',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Utenti',
        'title_singular' => 'Utente',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nome',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verificata il',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Ruoli',
            'roles_helper'             => '',
            'remember_token'           => 'Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Creato il',
            'created_at_helper'        => '',
            'updated_at'               => 'Aggiornato il',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Cancellato il',
            'deleted_at_helper'        => '',
        ],
    ],
    'status'         => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'name_helper'       => '',
            'color'             => 'Colore',
            'color_helper'      => '',
            'created_at'        => 'Creato il',
            'created_at_helper' => '',
            'updated_at'        => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at'        => 'Cancellato il',
            'deleted_at_helper' => '',
        ],
    ],
    'priority'       => [
        'title'          => 'Priorità',
        'title_singular' => 'Priorità',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'name_helper'       => '',
            'color'             => 'Colore',
            'color_helper'      => '',
            'created_at'        => 'Creata il',
            'created_at_helper' => '',
            'updated_at'        => 'Aggiornatoa il',
            'updated_at_helper' => '',
            'deleted_at'        => 'Cancellata il',
            'deleted_at_helper' => '',
        ],
    ],
    'category'       => [
        'title'          => 'Categorie',
        'title_singular' => 'Categoria',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'name_helper'       => '',
            'color'             => 'Colore',
            'color_helper'      => '',
            'created_at'        => 'Creata il',
            'created_at_helper' => '',
            'updated_at'        => 'Aggiornata il',
            'updated_at_helper' => '',
            'deleted_at'        => 'Cancellata il',
            'deleted_at_helper' => '',
        ],
    ],
    'ticket'         => [
        'title'          => 'Tickets',
        'title_singular' => 'Ticket',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'title'                   => 'Titolo',
            'title_helper'            => '',
            'content'                 => 'Contenuto',
            'content_helper'          => '',
            'status'                  => 'Status',
            'status_helper'           => '',
            'priority'                => 'Priorità',
            'priority_helper'         => '',
            'category'                => 'Categoria',
            'category_helper'         => '',
            'author_name'             => 'Autore',
            'author_name_helper'      => '',
            'author_email'            => 'Email Autore',
            'author_email_helper'     => '',
            'assigned_to_user'        => 'Assegnato a',
            'assigned_to_user_helper' => '',
            'comments'                => 'Commenti',
            'comments_helper'         => '',
            'created_at'              => 'Creato il',
            'created_at_helper'       => '',
            'updated_at'              => 'Aggiornato il',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Cancellato il',
            'deleted_at_helper'       => '',
            'attachments'             => 'Allegati',
            'attachments_helper'      => '',
        ],
    ],
    'comment'        => [
        'title'          => 'Commenti',
        'title_singular' => 'Commento',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'ticket'              => 'Ticket',
            'ticket_helper'       => '',
            'author_name'         => 'Nome Autore',
            'author_name_helper'  => '',
            'author_email'        => 'Email Autore',
            'author_email_helper' => '',
            'user'                => 'Utente',
            'user_helper'         => '',
            'comment_text'        => 'Testo',
            'comment_text_helper' => '',
            'created_at'          => 'Creato il',
            'created_at_helper'   => '',
            'updated_at'          => 'Aggiornato il',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Cancellato il',
            'deleted_at_helper'   => '',
        ],
    ],
    'auditLog'       => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'description'         => 'Descrizione',
            'description_helper'  => '',
            'subject_id'          => 'ID Soggetto',
            'subject_id_helper'   => '',
            'subject_type'        => 'Tipologia Soggetto',
            'subject_type_helper' => '',
            'user_id'             => 'ID Utente',
            'user_id_helper'      => '',
            'properties'          => 'Propietà',
            'properties_helper'   => '',
            'host'                => 'Host',
            'host_helper'         => '',
            'created_at'          => 'Creato il',
            'created_at_helper'   => '',
            'updated_at'          => 'Aggiornato il',
            'updated_at_helper'   => '',
        ],
    ],
];

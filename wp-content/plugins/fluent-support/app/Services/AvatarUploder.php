<?php

namespace FluentSupport\App\Services;

use Exception;
use FluentSupport\App\Models\Agent;
use FluentSupport\App\Models\Customer;
use FluentSupport\App\Services\Includes\FileSystem;

class AvatarUploder
{
    /**
     * @param $file - file object
     * @param int $userid - user id
     * @param string $type - Customer or Agent
     * @throws Exception
     * @return array
     */
    public function addOrUpdateProfileImage ( $file, $userid, $type )
    {
        $this->validateExtension($file);

        $user = $type == 'customer'? Customer::findOrFail($userid) : Agent::findOrFail($userid);

        $uploadedImage = FileSystem::setSubDir(strtolower($type).'_avatars')->put($file);


        if ( !$uploadedImage ) {
            throw new \Exception('Something went wrong while updating the profile picture', 403);
        }

        $user->avatar = $uploadedImage[0]['url'];
        $user->save();

        return [
            'message' => __('Profile picture has been updated successfully', 'fluent-support'),
            'image'   => $user->avatar,
            $type     => $user
        ];
    }

    /**
     * This Method Will Validate The Extension Of The File
     * @param $file - file object
     * @throws Exception
     * @return bool
     */
    private function validateExtension($file)
    {
        $allowExtension = [
            'jpeg', 'jpe', 'jpg', 'png'
        ];

        $ext = $file['file']->getClientOriginalExtension();

        if( !in_array($ext, $allowExtension) ) {
            throw new \Exception('Unsupported file submitted, please select an image file');
        }

        if( !in_array($ext, $allowExtension) ) {
            return false;
        }

        return true;
    }
}

<?php

namespace Webographen\AdminLog\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Statamic\Events\AssetContainerBlueprintFound;
use Statamic\Events\AssetContainerDeleted;
use Statamic\Events\AssetContainerSaved;
use Statamic\Events\AssetDeleted;
use Statamic\Events\AssetFolderDeleted;
use Statamic\Events\AssetFolderSaved;
use Statamic\Events\AssetSaved;
use Statamic\Events\AssetUploaded;
use Statamic\Events\BlueprintDeleted;
use Statamic\Events\BlueprintSaved;
use Statamic\Events\CollectionDeleted;
use Statamic\Events\CollectionSaved;
use Statamic\Events\EntryBlueprintFound;
use Statamic\Events\EntryDeleted;
use Statamic\Events\EntrySaved;
use Statamic\Events\EntrySaving;
use Statamic\Events\FieldsetDeleted;
use Statamic\Events\FieldsetSaved;
use Statamic\Events\FormBlueprintFound;
use Statamic\Events\FormDeleted;
use Statamic\Events\FormSaved;
use Statamic\Events\FormSubmitte;
use Statamic\Events\GlobalSetDeleted;
use Statamic\Events\GlobalSetSaved;
use Statamic\Events\GlobalVariablesBlueprintFound;
use Statamic\Events\NavDeleted;
use Statamic\Events\NavSaved;
use Statamic\Events\ResponseCreated;
use Statamic\Events\RoleDeleted;
use Statamic\Events\RoleSaved;
use Statamic\Events\SubmissionCreated;
use Statamic\Events\SubmissionDeleted;
use Statamic\Events\SubmissionSaved;
use Statamic\Events\TaxonomyDeleted;
use Statamic\Events\TaxonomySaved;
use Statamic\Events\TermBlueprintFound;
use Statamic\Events\TermDeleted;
use Statamic\Events\TermSaved;
use Statamic\Events\UserDeleted;
use Statamic\Events\UserGroupDeleted;
use Statamic\Events\UserGroupSaved;
use Statamic\Events\UserSaved;

class AdminLogListener
{
    static $eventList = [
        'AssetContainerBlueprintFound',
        'AssetContainerDeleted',
        'AssetContainerSaved',
        'AssetDeleted',
        'AssetFolderDeleted',
        'AssetFolderSaved',
        'AssetSaved',
        'AssetUploaded',
        'BlueprintDeleted',
        'BlueprintSaved',
        'CollectionDeleted',
        'CollectionSaved',
        'EntryBlueprintFound',
        'EntryDeleted',
        'EntrySaved',
        'EntrySaving',
        'FieldsetDeleted',
        'FieldsetSaved',
        'FormBlueprintFound',
        'FormDeleted',
        'FormSaved',
        'FormSubmitte',
        'GlobalSetDeleted',
        'GlobalSetSaved',
        'GlobalVariablesBlueprintFound',
        'NavDeleted',
        'NavSaved',
        'ResponseCreated',
        'RoleDeleted',
        'RoleSaved',
        'SubmissionCreated',
        'SubmissionDeleted',
        'SubmissionSaved',
        'TaxonomyDeleted',
        'TaxonomySaved',
        'TermBlueprintFound',
        'TermDeleted',
        'TermSaved',
        'UserDeleted',
        'UserGroupDeleted',
        'UserGroupSaved',
        'UserSaved'
    ]; 

    /**
     * Add an entry to our admin log.
     *
     * @return void
     */
    public function addEntry($message)
    {
        Log::channel('adminlog')->info($message);
    }

    /**
     * Handle the AssetContainerBlueprintFoundevent.
     *
     * @param  AssetContainerBlueprintFound $event
     * @return void
     */
    public function handleAssetContainerBlueprintFound(AssetContainerBlueprintFound $event)
    {
        $this->addEntry('AssetContainerBlueprintFound');
    }

    /**
     * Handle the AssetContainerDeleted event.
     *
     * @param  AssetContainerDeleted $event
     * @return void
     */
    public function handleAssetContainerDeleted(AssetContainerDeleted $event)
    {
        $this->addEntry('AssetContainerDeleted');
    }

    /**
     * Handle the AssetContainerSaved event.
     *
     * @param  AssetContainerSaved $event
     * @return void
     */
    public function handleAssetContainerSaved(AssetContainerSaved $event)
    {
        $this->addEntry('AssetContainerSaved');
    }

    /**
     * Handle the AssetDeleted event.
     *
     * @param  AssetDeleted $event
     * @return void
     */
    public function handleAssetDeleted(AssetDeleted $event)
    {
        $this->addEntry('AssetDeleted');
    }

    /**
     * Handle the AssetFolderDeleted event.
     *
     * @param  AssetFolderDeleted $event
     * @return void
     */
    public function handleAssetFolderDeleted(AssetFolderDeleted $event)
    {
        $this->addEntry('AssetFolderDeleted');
    }

    /**
     * Handle the AssetFolderSaved event.
     *
     * @param  AssetFolderSaved $event
     * @return void
     */
    public function handleAssetFolderSaved(AssetFolderSaved $event)
    {
        $this->addEntry('AssetFolderSaved');
    }

    /**
     * Handle the AssetSaved event.
     *
     * @param  AssetSaved $event
     * @return void
     */
    public function handleAssetSaved(AssetSaved $event)
    {
        $this->addEntry('AssetSaved');
    }

    /**
     * Handle the AssetUploaded event.
     *
     * @param  AssetUploaded $event
     * @return void
     */
    public function handleAssetUploaded(AssetUploaded $event)
    {
        $this->addEntry('AssetUploaded');
    }

    /**
     * Handle the BlueprintDeleted event.
     *
     * @param  BlueprintDeleted $event
     * @return void
     */
    public function handleBlueprintDeleted(BlueprintDeleted $event)
    {
        $this->addEntry('BlueprintDeleted');
    }

    /**
     * Handle the BlueprintSaved event.
     *
     * @param  BlueprintSaved $event
     * @return void
     */
    public function handleBlueprintSaved(BlueprintSaved $event)
    {
        $this->addEntry('BlueprintSaved');
    }

    /**
     * Handle the CollectionDeleted event.
     *
     * @param  CollectionDeleted $event
     * @return void
     */
    public function handleCollectionDeleted(CollectionDeleted $event)
    {
        $this->addEntry('CollectionDeleted');
    }

    /**
     * Handle the CollectionSaved event.
     *
     * @param  CollectionSaved $event
     * @return void
     */
    public function handleCollectionSaved(CollectionSaved $event)
    {
        $this->addEntry('CollectionSaved');
    }

    /**
     * Handle the EntryBlueprintFound event.
     *
     * @param  EntryBlueprintFound $event
     * @return void
     */
    public function handleEntryBlueprintFound(EntryBlueprintFound $event)
    {
        $this->addEntry('EntryBlueprintFound');
    }

    /**
     * Handle the EntryDeleted event.
     *
     * @param  EntryDeleted $event
     * @return void
     */
    public function handleEntryDeleted(EntryDeleted $event)
    {
        $this->addEntry('EntryDeleted');
    }

    /**
     * Handle the EntrySaved event.
     *
     * @param  EntrySaved $event
     * @return void
     */
    public function handleEntrySaved(EntrySaved $event)
    {
        $this->addEntry('EntrySaved');
    }

    /**
     * Handle the EntrySaving event.
     *
     * @param  EntrySaving $event
     * @return void
     */
    public function handleEntrySaving(EntrySaving $event)
    {
        $this->addEntry('EntrySaving');
    }

    /**
     * Handle the FieldsetDeleted event.
     *
     * @param  FieldsetDeleted $event
     * @return void
     */
    public function handleFieldsetDeleted(FieldsetDeleted $event)
    {
        $this->addEntry('FieldsetDeleted');
    }

    /**
     * Handle the FieldsetSaved event.
     *
     * @param  FieldsetSaved $event
     * @return void
     */
    public function handleFieldsetSaved(FieldsetSaved $event)
    {
        $this->addEntry('FieldsetSaved');
    }

    /**
     * Handle the FormBlueprintFound event.
     *
     * @param  FormBlueprintFound $event
     * @return void
     */
    public function handleFormBlueprintFound(FormBlueprintFound $event)
    {
        $this->addEntry('FormBlueprintFound');
    }

    /**
     * Handle the FormDeleted event.
     *
     * @param  FormDeleted $event
     * @return void
     */
    public function handleFormDeleted(FormDeleted $event)
    {
        $this->addEntry('FormDeleted');
    }

    /**
     * Handle the FormSaved event.
     *
     * @param  FormSaved $event
     * @return void
     */
    public function handleFormSaved(FormSaved $event)
    {
        $this->addEntry('FormSaved');
    }

    /**
     * Handle the FormSubmitted event.
     *
     * @param  FormSubmitted $event
     * @return void
     */
    public function handleFormSubmitted(FormSubmitted $event)
    {
        $this->addEntry('FormSubmitted');
    }

    /**
     * Handle the GlobalSetDeleted event.
     *
     * @param  GlobalSetDeleted $event
     * @return void
     */
    public function handleGlobalSetDeleted(GlobalSetDeleted $event)
    {
        $this->addEntry('GlobalSetDeleted');
    }

    /**
     * Handle the GlobalSetSaved event.
     *
     * @param  GlobalSetSaved $event
     * @return void
     */
    public function handleGlobalSetSaved(GlobalSetSaved $event)
    {
        $this->addEntry('GlobalSetSaved');
    }

    /**
     * Handle the GlobalVariablesBlueprintFound event.
     *
     * @param  GlobalVariablesBlueprintFound $event
     * @return void
     */
    public function handleGlobalVariablesBlueprintFound(GlobalVariablesBlueprintFound $event)
    {
        $this->addEntry('GlobalVariablesBlueprintFound');
    }

    /**
     * Handle the NavDeleted event.
     *
     * @param  NavDeleted $event
     * @return void
     */
    public function handleNavDeleted(NavDeleted $event)
    {
        $this->addEntry('NavDeleted');
    }

    /**
     * Handle the NavSaved event.
     *
     * @param  NavSaved $event
     * @return void
     */
    public function handleNavSaved(NavSaved $event)
    {
        $this->addEntry('NavSaved');
    }

    /**
     * Handle the ResponseCreated event.
     *
     * @param  ResponseCreated $event
     * @return void
     */
    public function handleResponseCreated(ResponseCreated $event)
    {
        $this->addEntry('ResponseCreated');
    }

    /**
     * Handle the RoleDeleted event.
     *
     * @param  RoleDeleted $event
     * @return void
     */
    public function handleRoleDeleted(RoleDeleted $event)
    {
        $this->addEntry('RoleDeleted');
    }

    /**
     * Handle the RoleSaved event.
     *
     * @param  RoleSaved $event
     * @return void
     */
    public function handleRoleSaved(RoleSaved $event)
    {
        $this->addEntry('RoleSaved');
    }

    /**
     * Handle the SubmissionCreated event.
     *
     * @param  SubmissionCreated $event
     * @return void
     */
    public function handleSubmissionCreated(SubmissionCreated $event)
    {
        $this->addEntry('SubmissionCreated');
    }

    /**
     * Handle the SubmissionDeleted event.
     *
     * @param  SubmissionDeleted $event
     * @return void
     */
    public function handleSubmissionDeleted(SubmissionDeleted $event)
    {
        $this->addEntry('SubmissionDeleted');
    }

    /**
     * Handle the SubmissionSaved event.
     *
     * @param  SubmissionSaved $event
     * @return void
     */
    public function handleSubmissionSaved(SubmissionSaved $event)
    {
        $this->addEntry('SubmissionSaved');
    }

    /**
     * Handle the TaxonomyDeleted event.
     *
     * @param  TaxonomyDeleted $event
     * @return void
     */
    public function handleTaxonomyDeleted(TaxonomyDeleted $event)
    {
        $this->addEntry('TaxonomyDeleted');
    }

    /**
     * Handle the TaxonomySaved event.
     *
     * @param  TaxonomySaved $event
     * @return void
     */
    public function handleTaxonomySaved(TaxonomySaved $event)
    {
        $this->addEntry('TaxonomySaved');
    }

    /**
     * Handle the TermBlueprintFound event.
     *
     * @param  TermBlueprintFound $event
     * @return void
     */
    public function handleTermBlueprintFound(TermBlueprintFound $event)
    {
        $this->addEntry('TermBlueprintFound');
    }

    /**
     * Handle the TermDeleted event.
     *
     * @param  TermDeleted $event
     * @return void
     */
    public function handleTermDeleted(TermDeleted $event)
    {
        $this->addEntry('TermDeleted');
    }

    /**
     * Handle the TermSaved event.
     *
     * @param  TermSaved $event
     * @return void
     */
    public function handleTermSaved(TermSaved $event)
    {
        $this->addEntry('TermSaved');
    }

    /**
     * Handle the UserDeleted event.
     *
     * @param  UserDeleted $event
     * @return void
     */
    public function handleUserDeleted(UserDeleted $event)
    {
        $this->addEntry('UserDeleted');
    }

    /**
     * Handle the UserGroupDeleted event.
     *
     * @param  UserGroupDeleted $event
     * @return void
     */
    public function handleUserGroupDeleted(UserGroupDeleted $event)
    {
        $this->addEntry('UserGroupDeleted');
    }

    /**
     * Handle the UserGroupSaved event.
     *
     * @param  UserGroupSaved $event
     * @return void
     */
    public function handleUserGroupSaved(UserGroupSaved $event)
    {
        $this->addEntry('UserGroupSaved');
    }

    /**
     * Handle the UserSaved event.
     *
     * @param  UserSaved $event
     * @return void
     */
    public function handleUserSaved(UserSaved $event)
    {
        $this->addEntry('UserSaved');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        foreach ($this->eventList as $event) {
            $events->listen(
                $event,
                'Webographen\AdminLog\Listeners\AdminLogListener@handle'.$event
            );
        }
    }
}
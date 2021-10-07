<?php

namespace Webographen\AdminLog\Listeners;

use Illuminate\Support\Facades\Log;

use Statamic\Events\AssetContainerDeleted;
use Statamic\Events\AssetContainerSaved;
use Statamic\Events\AssetDeleted;
use Statamic\Events\AssetFolderDeleted;
use Statamic\Events\AssetFolderSaved;
use Statamic\Events\AssetSaved;
use Statamic\Events\BlueprintDeleted;
use Statamic\Events\BlueprintSaved;
use Statamic\Events\CollectionDeleted;
use Statamic\Events\CollectionSaved;
use Statamic\Events\EntryDeleted;
use Statamic\Events\EntrySaved;
use Statamic\Events\FieldsetDeleted;
use Statamic\Events\FieldsetSaved;
use Statamic\Events\FormDeleted;
use Statamic\Events\FormSaved;
use Statamic\Events\FormSubmitte;
use Statamic\Events\GlobalSetDeleted;
use Statamic\Events\GlobalSetSaved;
use Statamic\Events\NavDeleted;
use Statamic\Events\NavSaved;
use Statamic\Events\RoleDeleted;
use Statamic\Events\RoleSaved;
use Statamic\Events\SubmissionCreated;
use Statamic\Events\SubmissionDeleted;
use Statamic\Events\SubmissionSaved;
use Statamic\Events\TaxonomyDeleted;
use Statamic\Events\TaxonomySaved;
use Statamic\Events\TermDeleted;
use Statamic\Events\TermSaved;
use Statamic\Events\UserDeleted;
use Statamic\Events\UserGroupDeleted;
use Statamic\Events\UserGroupSaved;
use Statamic\Events\UserSaved;

class AdminLogSubscriber
{
    
    /**
     * Add an entry to our admin log.
     *
     * @return void
     */
    public function addEntry($message)
    {
        Log::channel('adminlog')->info(auth()->user()->name." ('".auth()->user()->id()."') ".$message);
    }

    /**
     * Handle the AssetContainerDeleted event.
     *
     * @param  AssetContainerDeleted $event
     * @return void
     */
    public function handleAssetContainerDeleted(AssetContainerDeleted $event)
    {
        $this->addEntry("deleted asset container '".$event->container->title()."' (id: '".$event->container->id()."')");
    }

    /**
     * Handle the AssetContainerSaved event.
     *
     * @param  AssetContainerSaved $event
     * @return void
     */
    public function handleAssetContainerSaved(AssetContainerSaved $event)
    {
        $this->addEntry("created/edited asset container '".$event->container->title()."' (id: '".$event->container->id()."')");
    }

    /**
     * Handle the AssetDeleted event.
     *
     * @param  AssetDeleted $event
     * @return void
     */
    public function handleAssetDeleted(AssetDeleted $event)
    {
        $this->addEntry("deleted asset '".$event->asset->url()."'");
    }

    /**
     * Handle the AssetFolderDeleted event.
     *
     * @param  AssetFolderDeleted $event
     * @return void
     */
    public function handleAssetFolderDeleted(AssetFolderDeleted $event)
    {
        $this->addEntry("deleted asset folder '".$event->folder->path()."'");
    }

    /**
     * Handle the AssetFolderSaved event.
     *
     * @param  AssetFolderSaved $event
     * @return void
     */
    public function handleAssetFolderSaved(AssetFolderSaved $event)
    {
        $this->addEntry("created/edited asset folder '".$event->folder->path()."'");
    }

    /**
     * Handle the AssetSaved event.
     *
     * @param  AssetSaved $event
     * @return void
     */
    public function handleAssetSaved(AssetSaved $event)
    {
        $this->addEntry("created/edited asset '".$event->asset->url()."'");
    }

    /**
     * Handle the BlueprintDeleted event.
     *
     * @param  BlueprintDeleted $event
     * @return void
     */
    public function handleBlueprintDeleted(BlueprintDeleted $event)
    {
        $this->addEntry("deleted blueprint '".$event->blueprint->title()."' (handle: '".$event->blueprint->handle()."') for '".$event->blueprint->namespace()."'");
    }

    /**
     * Handle the BlueprintSaved event.
     *
     * @param  BlueprintSaved $event
     * @return void
     */
    public function handleBlueprintSaved(BlueprintSaved $event)
    {
        $this->addEntry("created/edited blueprint '".$event->blueprint->title()."' (handle: '".$event->blueprint->handle()."') for '".$event->blueprint->namespace()."'");
    }

    /**
     * Handle the CollectionDeleted event.
     *
     * @param  CollectionDeleted $event
     * @return void
     */
    public function handleCollectionDeleted(CollectionDeleted $event)
    {
        $this->addEntry("deleted collection '".$event->collection->title()."' (handle: '".$event->collection->handle()."')");
    }

    /**
     * Handle the CollectionSaved event.
     *
     * @param  CollectionSaved $event
     * @return void
     */
    public function handleCollectionSaved(CollectionSaved $event)
    {
        $this->addEntry("created/edited collection '".$event->collection->title()."' (handle: '".$event->collection->handle()."')");
    }

    /**
     * Handle the EntryDeleted event.
     *
     * @param  EntryDeleted $event
     * @return void
     */
    public function handleEntryDeleted(EntryDeleted $event)
    {
        $this->addEntry("deleted entry '".$event->entry->title."' (id: '".$event->entry->id()."') in collection '".$event->entry->collection()->title()."'");
    }

    /**
     * Handle the EntrySaved event.
     *
     * @param  EntrySaved $event
     * @return void
     */
    public function handleEntrySaved(EntrySaved $event)
    {
        $this->addEntry("created/edited entry '".$event->entry->title."' (id: '".$event->entry->id()."') in collection '".$event->entry->collection()->title()."'");
    }

    /**
     * Handle the FieldsetDeleted event.
     *
     * @param  FieldsetDeleted $event
     * @return void
     */
    public function handleFieldsetDeleted(FieldsetDeleted $event)
    {
        $this->addEntry("deleted fieldset '".$event->fieldset->title()."' (handle: '".$event->fieldset->handle()."')");
    }

    /**
     * Handle the FieldsetSaved event.
     *
     * @param  FieldsetSaved $event
     * @return void
     */
    public function handleFieldsetSaved(FieldsetSaved $event)
    {
        $this->addEntry("created/edited fieldset '".$event->fieldset->title()."' (handle: '".$event->fieldset->handle()."')");
    }

    /**
     * Handle the FormDeleted event.
     *
     * @param  FormDeleted $event
     * @return void
     */
    public function handleFormDeleted(FormDeleted $event)
    {
        $this->addEntry("deleted form '".$event->form->title()."' (handle: '".$event->form->handle()."')");
    }

    /**
     * Handle the FormSaved event.
     *
     * @param  FormSaved $event
     * @return void
     */
    public function handleFormSaved(FormSaved $event)
    {
        $this->addEntry("created/edited form '".$event->form->title()."' (handle: '".$event->form->handle()."')");
    }

    /**
     * Handle the GlobalSetDeleted event.
     *
     * @param  GlobalSetDeleted $event
     * @return void
     */
    public function handleGlobalSetDeleted(GlobalSetDeleted $event)
    {
        $this->addEntry("deleted global set '".$event->globals->title()."' (handle: '".$event->globals->handle()."')");
    }

    /**
     * Handle the GlobalSetSaved event.
     *
     * @param  GlobalSetSaved $event
     * @return void
     */
    public function handleGlobalSetSaved(GlobalSetSaved $event)
    {
        $this->addEntry("created/edited global set '".$event->globals->title()."' (handle: '".$event->globals->handle()."')");
    }

    /**
     * Handle the NavDeleted event.
     *
     * @param  NavDeleted $event
     * @return void
     */
    public function handleNavDeleted(NavDeleted $event)
    {
        $this->addEntry("deleted navigation '".$event->nav->title()."' (handle: '".$event->nav->handle()."')");
    }

    /**
     * Handle the NavSaved event.
     *
     * @param  NavSaved $event
     * @return void
     */
    public function handleNavSaved(NavSaved $event)
    {
        $this->addEntry("created/edited navigation '".$event->nav->title()."' (handle: '".$event->nav->handle()."')");
    }

    /**
     * Handle the RoleDeleted event.
     *
     * @param  RoleDeleted $event
     * @return void
     */
    public function handleRoleDeleted(RoleDeleted $event)
    {
        $this->addEntry("deleted role '".$event->role->title()."' (handle: '".$event->role->handle()."')");
    }

    /**
     * Handle the RoleSaved event.
     *
     * @param  RoleSaved $event
     * @return void
     */
    public function handleRoleSaved(RoleSaved $event)
    {
        $this->addEntry("created/edited role '".$event->role->title()."' (handle: '".$event->role->handle()."')");
    }

    /**
     * Handle the SubmissionDeleted event.
     *
     * @param  SubmissionDeleted $event
     * @return void
     */
    public function handleSubmissionDeleted(SubmissionDeleted $event)
    {
        $this->addEntry("deleted submission for '".$event->submission->title()."'");
    }

    /**
     * Handle the SubmissionSaved event.
     *
     * @param  SubmissionSaved $event
     * @return void
     */
    public function handleSubmissionSaved(SubmissionSaved $event)
    {
        $this->addEntry("edited submission for '".$event->submission->title()."'");
    }

    /**
     * Handle the TaxonomyDeleted event.
     *
     * @param  TaxonomyDeleted $event
     * @return void
     */
    public function handleTaxonomyDeleted(TaxonomyDeleted $event)
    {
        $this->addEntry("deleted taxonomy '".$event->taxonomy->title()."' (handle: '".$event->taxonomy->handle()."')");
    }

    /**
     * Handle the TaxonomySaved event.
     *
     * @param  TaxonomySaved $event
     * @return void
     */
    public function handleTaxonomySaved(TaxonomySaved $event)
    {
        $this->addEntry("created/edited taxonomy '".$event->taxonomy->title()."' (handle: '".$event->taxonomy->handle()."')");
    }

    /**
     * Handle the TermDeleted event.
     *
     * @param  TermDeleted $event
     * @return void
     */
    public function handleTermDeleted(TermDeleted $event)
    {
        $this->addEntry("deleted term '".$event->term->title()."' (id: '".$event->term->id()."') in taxonomy '".$event->term->taxonomy()->title()."'");
    }

    /**
     * Handle the TermSaved event.
     *
     * @param  TermSaved $event
     * @return void
     */
    public function handleTermSaved(TermSaved $event)
    {
        $this->addEntry("created/edited term '".$event->term->title()."' (id: '".$event->term->id()."') in taxonomy '".$event->term->taxonomy()->title()."'");
    }

    /**
     * Handle the UserDeleted event.
     *
     * @param  UserDeleted $event
     * @return void
     */
    public function handleUserDeleted(UserDeleted $event)
    {
        $this->addEntry("deleted user '".$event->user->name."' (e-mail: '".$event->user->email()."', id: '".$event->user->id()."')");
    }

    /**
     * Handle the UserGroupDeleted event.
     *
     * @param  UserGroupDeleted $event
     * @return void
     */
    public function handleUserGroupDeleted(UserGroupDeleted $event)
    {
        $this->addEntry("deleted user group '".$event->group->title()."' (handle: '".$event->group->handle()."')");
    }

    /**
     * Handle the UserGroupSaved event.
     *
     * @param  UserGroupSaved $event
     * @return void
     */
    public function handleUserGroupSaved(UserGroupSaved $event)
    {
        $this->addEntry("created/edited user group '".$event->group->title()."' (handle: '".$event->group->handle()."')");
    }

    /**
     * Handle the UserSaved event.
     *
     * @param  UserSaved $event
     * @return void
     */
    public function handleUserSaved(UserSaved $event)
    {
        $this->addEntry("created/edited user '".$event->user->name."' (e-mail: '".$event->user->email()."', id: '".$event->user->id()."')");
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return void
     */
    public function subscribe($events)
    {
        return [
            AssetContainerDeleted::class => 'handleAssetContainerDeleted',
            AssetContainerSaved::class => 'handleAssetContainerSaved',
            AssetDeleted::class => 'handleAssetDeleted',
            AssetFolderDeleted::class => 'handleAssetFolderDeleted',
            AssetFolderSaved::class => 'handleAssetFolderSaved',
            AssetSaved::class => 'handleAssetSaved',
            BlueprintDeleted::class => 'handleBlueprintDeleted',
            BlueprintSaved::class => 'handleBlueprintSaved',
            CollectionDeleted::class => 'handleCollectionDeleted',
            CollectionSaved::class => 'handleCollectionSaved',
            EntryDeleted::class => 'handleEntryDeleted',
            EntrySaved::class => 'handleEntrySaved',
            FieldsetDeleted::class => 'handleFieldsetDeleted',
            FieldsetSaved::class => 'handleFieldsetSaved',
            FormDeleted::class => 'handleFormDeleted',
            FormSaved::class => 'handleFormSaved',
            GlobalSetDeleted::class => 'handleGlobalSetDeleted',
            GlobalSetSaved::class => 'handleGlobalSetSaved',
            NavDeleted::class => 'handleNavDeleted',
            NavSaved::class => 'handleNavSaved',
            RoleDeleted::class => 'handleRoleDeleted',
            RoleSaved::class => 'handleRoleSaved',
            SubmissionCreated::class => 'handleSubmissionCreated',
            SubmissionDeleted::class => 'handleSubmissionDeleted',
            SubmissionSaved::class => 'handleSubmissionSaved',
            TaxonomyDeleted::class => 'handleTaxonomyDeleted',
            TaxonomySaved::class => 'handleTaxonomySaved',
            TermDeleted::class => 'handleTermDeleted',
            TermSaved::class => 'handleTermSaved',
            UserDeleted::class => 'handleUserDeleted',
            UserGroupDeleted::class => 'handleUserGroupDeleted',
            UserGroupSaved::class => 'handleUserGroupSaved',
            UserSaved::class => 'handleUserSaved',
        ];
    }
}
# Silverstripe Tenant

Allow access to parts of the application using tenant permissions.

## Get Started
``` bash 
composer require offseat/silverstripe-tenant 
``` 

### Concepts
A `Tenant` represents a place in the application that a user has subscribed to.

A `TenantUser` represents an account attached to a `User` and a `Tenant`.

A `Workspace` represents an area of the application that has been created by a `TenantUser` and can be used to create and show data in different media.

A `WorkspaceUser` represents an account attached to a `User` and a `Workspace`.

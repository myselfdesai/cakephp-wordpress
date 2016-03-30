# Introduction #

Wordpress does not use a specific naming convention which makes it bit more difficult to tie the platform in with CakePHP. However, it is not impossible

# Details #

Model associations were built following [Wordpress' Database diagram](http://codex.wordpress.org/Database_Description). This is a basic summary of the associations created and assumes you have some knowledge of CakePHP's model associations.

## WP\_Commentmeta ##
Alias: Commentmetum
  * **belongsTo** _Comment_

## WP\_Comments ##
Alias: Comment
  * **belongsTo** _User_
  * **belongsTo** _Post_
  * **belongsTo** _CommentParent_
  * **hasMany** _Commentmetum_

_Comment_ can be a parent or a child by Wordpress definition. Therefore, it must be linked to itself.  Though you will need to use the same className when creating the association, you must use the same className but create a different Alias for the JOIN; I've used _CommentParent_. You will not need to create MVC for _CommentParent_

## WP\_Links ##
Alias: Link
  * No associations

## WP\_Options ##
Alias: Option
  * No associations

## WP\_Postmeta ##
Alias: Postmetum
  * **belongsTo** _Post_

## WP\_Posts ##
Alias: _Post_ and _PostParent_
  * **belongsTo** _PostParent_
  * **hasMany** _Postmetum_
  * **hasMany** _TermRelationship_
  * **hasMany** _Comments_

_Post_ can be a parent or a child by Wordpress definition. Therefore, it must be linked to itself.  Though you will need to use the same className when creating the association, you must use the same className but create a different Alias for the JOIN; I've used _PostParent_. You will not need to create MVC for _PostParent_

## WP\_Terms ##
Alias: Term
  * **hasMany** _TermTaxonomy_

## WP\_Term\_Relationships ##
Alias: TermRelationshipo
  * **belongsTo** _TermTaxonomy_

## WP\_Term\_Taxonomy ##
Alias: TermTaxonomy
  * **belongsTo** _Term_
  * **hasMany** _TermRelationship_

As _TermTaxonomy_'s table does not follow CakePHP naming conventions, when Baking, you will be asked if you want to use a database table. Type in the name of the table _without the prefix_.

## WP\_Usermeta ##
Alias: Usermetum
  * **belongsTo** _User_

## WP\_Users ##
Alias: User
  * **belongsTo** _Post_
  * **hasMany** _Comment_
  * **hasMany** _Usermetum_
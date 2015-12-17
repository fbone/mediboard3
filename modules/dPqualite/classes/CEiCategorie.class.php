<?php
/**
 * $Id: CEiCategorie.class.php 19316 2013-05-28 09:33:17Z rhum1 $
 *
 * @package    Mediboard
 * @subpackage Qualite
 * @author     SARL OpenXtrem <dev@openxtrem.com>
 * @license    GNU General Public License, see http://www.gnu.org/licenses/gpl.html
 * @version    $Revision: 19316 $
 */

/**
 * Cat�gories des fiches d'�v�nements ind�sirables
 * Class CEiCategorie
 */
class CEiCategorie extends CMbObject {
  // DB Table key
  public $ei_categorie_id;
    
  // DB Fields
  public $nom;

  // Behaviour Fileds
  public $_checked;

  // Object References
  /** @var  CEiItem[] */
  public $_ref_items;

  /**
   * @see parent::getSpec()
   */
  function getSpec() {
    $spec = parent::getSpec();
    $spec->table = 'ei_categories';
    $spec->key   = 'ei_categorie_id';
    return $spec;
  }

  /**
   * @see parent::getBackProps()
   */
  function getBackProps() {
    $backProps = parent::getBackProps();
    $backProps["items"] = "CEiItem ei_categorie_id";
    return $backProps;
  }

  /**
   * @see parent::getProps()
   */
  function getProps() {
    $specs = parent::getProps();
    $specs["nom"] = "str notNull maxLength|50";
    return $specs;
  }

  /**
   * @see parent::updateFormFields()
   */
  function updateFormFields(){
    parent::updateFormFields();
    $this->_view = $this->nom;
  }

  /**
   * @see parent::loadRefsBack()
   */
  function loadRefsBack() {
    $this->_ref_items = $this->loadBackRefs("items", "nom");
  }
}
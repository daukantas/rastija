<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Rastija\Owl;

/**
 * Sense Relation is a class representing the oriented relationship between 
 * Senses instances.
 *
 * @author Virginijus
 */
class LmfSenseRelation extends AbstractLmfClass
{
    /**
     * @todo should be used LmfSense indeed LmfLexicalEntry
     * 
     * @var array of LmfLexicalEntry
     */
    private $senseRelatedTo = array();
    
    /* ------------------------ Not LMF ontology parameters ------------------*/
    /** 
     * relation type e.q. synonym
     * @var string
     */
    private $type;
    
    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }
    
    public function getSenseRelatedTo() {
        return $this->relatedTo;
    }

    /**
     * It represent realation senseRelatedTo 
     * @param \Rastija\Owl\LmfLexicalEntry $lmfLexicalEntry
     */
    public function addSenseRelatedTo(LmfLexicalEntry $lmfLexicalEntry) {
        array_push($this->relatedTo, $lmfLexicalEntry);
    }


    public function toLmfString() {
        /*
        <owl:NamedIndividual rdf:about="http://www.lexinfo.net/lmf#Sinonimu_zodynas.abejaip.SenseRelation">
          <j.0:type>Sinonimas</j.0:type>
          <j.0:senseRelatedTo rdf:resource="http://www.lexinfo.net/lmf#Sinonimu_zodynas.dvejopai.LexicalEntry"/>
          <j.0:senseRelatedTo rdf:resource="http://www.lexinfo.net/lmf#Sinonimu_zodynas.dvejaip.LexicalEntry"/>
          <j.0:senseRelatedTo rdf:resource="http://www.lexinfo.net/lmf#Sinonimu_zodynas.abejopai.LexicalEntry"/>
          <rdfs:label>Sinonimu_zodynas.abejaip.SenseRelation</rdfs:label>
          <rdf:type rdf:resource="http://www.lexinfo.net/lmf#SenseRelation"/>
        </owl:NamedIndividual>
         */
        $str = "<owl:NamedIndividual rdf:about=\"{$this->getUri()}\">\n";
        if ($this->getType()) {
            $str .= "\t<&lmf;type>{$this->getType()}</&lmf;type>\n";
        }
        
        foreach ($this->senseRelatedTo as $lmfLexicalEntry) {
            $str .= "\t<senseRelatedTo rdf:resource=\"{$lmfLexicalEntry->getUri() }\"/>\n";
        }

        $str .= "\t<rdfs:label>{$this->getUri()}</rdfs:label>\n";
        $str .= "\t<rdf:type rdf:resource=\"&lmf;SenseRelation\"/>\n";
        $str .= "</owl:NamedIndividual>\n";
        
        return $str;
    }
}

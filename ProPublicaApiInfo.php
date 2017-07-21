<?php 

use \Curl\Curl;

class ProPublicaApiInfo
{
    private $org_multi = array();
    
    public function __construct($ein)
    {
        $curl = new Curl();
        
        $url = "https://projects.propublica.org/nonprofits/api/v2/organizations/".$ein.".json";
        
        $result = $curl->get($url);
        $data = json_encode($result);
        $data = json_decode($data, true);
        
        $this->org_multi = $data;
    }
    
    function orgInfoGeneral()
    {
        foreach($this->org_multi['organization'] as $key => $value)
        {
            $org_info[$key] = $value;
        }
        return $org_info;
    }
    
    function getFormType()
    {
        $form_type = array();
        
        if(!isset($this->org_multi['filings_with_data']))
        {
            return false;
        }
        else
        {
            foreach($this->org_multi['filings_with_data'] as $value)
            {
                $year = $value["tax_prd_yr"];
                $form_type[$year] = $value["formtype"];
            }
            return $form_type;
        }
    }
    
    function getYearPdf()
    {
        $pdf_url = array();
        
        if(!isset($this->org_multi['filings_with_data']))
        {
            return false;
        }
        else
        {
            foreach($this->org_multi['filings_with_data'] as $value)
            {
                $year = $value["tax_prd_yr"];
                $pdf_url[$year] = $value["pdf_url"];
            }
            return $pdf_url;
        }
    }
    
    function getUpdateInfo()
    {
        $update_info = array();
        
        if(!isset($this->org_multi['filings_with_data']))
        {
            return false;
        }
        else
        {
            foreach($this->org_multi['filings_with_data'] as $value)
            {
                $year = $value["tax_prd_yr"];
                $update_info[$year] = $value["updated"];
            }
            return $update_info;
        }
    }
    
    function getTotalRevenue()
    {
        $totrevenue = array();
        
        if(!isset($this->org_multi['filings_with_data']))
        {
            return false;
        }
        else
        {
            foreach($this->org_multi['filings_with_data'] as $value)
            {
                $year = $value["tax_prd_yr"];
                $totrevenue[$year] = $value["totrevenue"];
            }
            return $totrevenue;
        }
    }
    
    function getTotalFuncExpenses()
    {
        $totfuncexpns = array();
        
        if(!isset($this->org_multi['filings_with_data']))
        {
            return false;
        }
        else
        {
            foreach($this->org_multi['filings_with_data'] as $value)
            {
                $year = $value["tax_prd_yr"];
                $totfuncexpns[$year] = $value["totfuncexpns"];
            }
            return $totfuncexpns;
        }
    }
    
    function getTotalAssetsEnd()
    {
        $totassetsend = array();
        
        if(!isset($this->org_multi['filings_with_data']))
        {
            return false;
        }
        else
        {
            foreach($this->org_multi['filings_with_data'] as $value)
            {
                $year = $value["tax_prd_yr"];
                $totassetsend[$year] = $value["totassetsend"];

            }
            return $totassetsend;
        }
    }
    
    function getTotalLiabEnd()
    {
        $totliabend = array();
        
        if(!isset($this->org_multi['filings_with_data']))
        {
            return false;
        }
        else
        {
            foreach($this->org_multi['filings_with_data'] as $value)
            {
                $year = $value["tax_prd_yr"];
                $totliabend[$year] = $value["totliabend"];

            }
            return $totliabend;
        }
    }
    
    function getUnRelBus()
    {
        $unrelbusinccd = array();
        
        if(!isset($this->org_multi['filings_with_data']))
        {
            return false;
        }
        else
        {
            foreach($this->org_multi['filings_with_data'] as $value)
            {
                $year = $value["tax_prd_yr"];
                $unrelbusinccd[$year] = $value["unrelbusinccd"];

            }
            return $unrelbusinccd;
        }
    }
    
    function getTotalCntrBg()
    {
        $totcntrbgfts = array();
        
        if(!isset($this->org_multi['filings_with_data']))
        {
            return false;
        }
        else
        {
            foreach($this->org_multi['filings_with_data'] as $value)
            {
                $year = $value["tax_prd_yr"];
                $totcntrbgfts[$year] = $value["totcntrbgfts"];

            }
            return $totcntrbgfts;
        }
    }
    
    function getTotalProgramRevenue()
    {
        $totprgmrevnue = array();
        
        if(!isset($this->org_multi['filings_with_data']))
        {
            return false;
        }
        else
        {
            foreach($this->org_multi['filings_with_data'] as $value)
            {
                $year = $value["tax_prd_yr"];
                $totprgmrevnue[$year] = $value["totprgmrevnue"];

            }
            return $totprgmrevnue;
        }
    }
    
    function getInvestmentInc()
    {
        $invstmntinc = array();
        
        if(!isset($this->org_multi['filings_with_data']))
        {
            return false;
        }
        else
        {
            foreach($this->org_multi['filings_with_data'] as $value)
            {
                $year = $value["tax_prd_yr"];
                $invstmntinc[$year] = $value["invstmntinc"];

            }
            return $invstmntinc;
        }
    }
    
    function getCompensationOfficer()
    {
        $compnsatncurrofcr = array();
        
        if(!isset($this->org_multi['filings_with_data']))
        {
            return false;
        }
        else
        {
            foreach($this->org_multi['filings_with_data'] as $value)
            {
                $year = $value["tax_prd_yr"];
                $compnsatncurrofcr[$year] = $value["compnsatncurrofcr"];

            }
            return $compnsatncurrofcr;
        }
    }
}

?>

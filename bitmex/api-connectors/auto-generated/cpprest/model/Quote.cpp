/**
 * BitMEX API
 * ## REST API for the BitMEX Trading Platform  [View Changelog](/app/apiChangelog)    #### Getting Started  Base URI: [https://www.bitmex.com/api/v1](/api/v1)  ##### Fetching Data  All REST endpoints are documented below. You can try out any query right from this interface.  Most table queries accept `count`, `start`, and `reverse` params. Set `reverse=true` to get rows newest-first.  Additional documentation regarding filters, timestamps, and authentication is available in [the main API documentation](/app/restAPI).  *All* table data is available via the [Websocket](/app/wsAPI). We highly recommend using the socket if you want to have the quickest possible data without being subject to ratelimits.  ##### Return Types  By default, all data is returned as JSON. Send `?_format=csv` to get CSV data or `?_format=xml` to get XML data.  ##### Trade Data Queries  *This is only a small subset of what is available, to get you started.*  Fill in the parameters and click the `Try it out!` button to try any of these queries.  * [Pricing Data](#!/Quote/Quote_get)  * [Trade Data](#!/Trade/Trade_get)  * [OrderBook Data](#!/OrderBook/OrderBook_getL2)  * [Settlement Data](#!/Settlement/Settlement_get)  * [Exchange Statistics](#!/Stats/Stats_history)  Every function of the BitMEX.com platform is exposed here and documented. Many more functions are available.  ##### Swagger Specification  [⇩ Download Swagger JSON](swagger.json)    ## All API Endpoints  Click to expand a section. 
 *
 * OpenAPI spec version: 1.2.0
 * Contact: support@bitmex.com
 *
 * NOTE: This class is auto generated by the swagger code generator 2.4.0-SNAPSHOT.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */



#include "Quote.h"

namespace io {
namespace swagger {
namespace client {
namespace model {

Quote::Quote()
{
    m_Timestamp = utility::datetime();
    m_Symbol = utility::conversions::to_string_t("");
    m_BidSize = 0.0;
    m_BidSizeIsSet = false;
    m_BidPrice = 0.0;
    m_BidPriceIsSet = false;
    m_AskPrice = 0.0;
    m_AskPriceIsSet = false;
    m_AskSize = 0.0;
    m_AskSizeIsSet = false;
}

Quote::~Quote()
{
}

void Quote::validate()
{
    // TODO: implement validation
}

web::json::value Quote::toJson() const
{
    web::json::value val = web::json::value::object();

    val[utility::conversions::to_string_t("timestamp")] = ModelBase::toJson(m_Timestamp);
    val[utility::conversions::to_string_t("symbol")] = ModelBase::toJson(m_Symbol);
    if(m_BidSizeIsSet)
    {
        val[utility::conversions::to_string_t("bidSize")] = ModelBase::toJson(m_BidSize);
    }
    if(m_BidPriceIsSet)
    {
        val[utility::conversions::to_string_t("bidPrice")] = ModelBase::toJson(m_BidPrice);
    }
    if(m_AskPriceIsSet)
    {
        val[utility::conversions::to_string_t("askPrice")] = ModelBase::toJson(m_AskPrice);
    }
    if(m_AskSizeIsSet)
    {
        val[utility::conversions::to_string_t("askSize")] = ModelBase::toJson(m_AskSize);
    }

    return val;
}

void Quote::fromJson(web::json::value& val)
{
    setTimestamp
    (ModelBase::dateFromJson(val[utility::conversions::to_string_t("timestamp")]));
    setSymbol(ModelBase::stringFromJson(val[utility::conversions::to_string_t("symbol")]));
    if(val.has_field(utility::conversions::to_string_t("bidSize")))
    {
        setBidSize(ModelBase::doubleFromJson(val[utility::conversions::to_string_t("bidSize")]));
    }
    if(val.has_field(utility::conversions::to_string_t("bidPrice")))
    {
        setBidPrice(ModelBase::doubleFromJson(val[utility::conversions::to_string_t("bidPrice")]));
    }
    if(val.has_field(utility::conversions::to_string_t("askPrice")))
    {
        setAskPrice(ModelBase::doubleFromJson(val[utility::conversions::to_string_t("askPrice")]));
    }
    if(val.has_field(utility::conversions::to_string_t("askSize")))
    {
        setAskSize(ModelBase::doubleFromJson(val[utility::conversions::to_string_t("askSize")]));
    }
}

void Quote::toMultipart(std::shared_ptr<MultipartFormData> multipart, const utility::string_t& prefix) const
{
    utility::string_t namePrefix = prefix;
    if(namePrefix.size() > 0 && namePrefix.substr(namePrefix.size() - 1) != utility::conversions::to_string_t("."))
    {
        namePrefix += utility::conversions::to_string_t(".");
    }

    multipart->add(ModelBase::toHttpContent(namePrefix + utility::conversions::to_string_t("timestamp"), m_Timestamp));
    multipart->add(ModelBase::toHttpContent(namePrefix + utility::conversions::to_string_t("symbol"), m_Symbol));
    if(m_BidSizeIsSet)
    {
        multipart->add(ModelBase::toHttpContent(namePrefix + utility::conversions::to_string_t("bidSize"), m_BidSize));
    }
    if(m_BidPriceIsSet)
    {
        multipart->add(ModelBase::toHttpContent(namePrefix + utility::conversions::to_string_t("bidPrice"), m_BidPrice));
    }
    if(m_AskPriceIsSet)
    {
        multipart->add(ModelBase::toHttpContent(namePrefix + utility::conversions::to_string_t("askPrice"), m_AskPrice));
    }
    if(m_AskSizeIsSet)
    {
        multipart->add(ModelBase::toHttpContent(namePrefix + utility::conversions::to_string_t("askSize"), m_AskSize));
    }
}

void Quote::fromMultiPart(std::shared_ptr<MultipartFormData> multipart, const utility::string_t& prefix)
{
    utility::string_t namePrefix = prefix;
    if(namePrefix.size() > 0 && namePrefix.substr(namePrefix.size() - 1) != utility::conversions::to_string_t("."))
    {
        namePrefix += utility::conversions::to_string_t(".");
    }

    setTimestamp(ModelBase::dateFromHttpContent(multipart->getContent(utility::conversions::to_string_t("timestamp"))));
    setSymbol(ModelBase::stringFromHttpContent(multipart->getContent(utility::conversions::to_string_t("symbol"))));
    if(multipart->hasContent(utility::conversions::to_string_t("bidSize")))
    {
        setBidSize(ModelBase::doubleFromHttpContent(multipart->getContent(utility::conversions::to_string_t("bidSize"))));
    }
    if(multipart->hasContent(utility::conversions::to_string_t("bidPrice")))
    {
        setBidPrice(ModelBase::doubleFromHttpContent(multipart->getContent(utility::conversions::to_string_t("bidPrice"))));
    }
    if(multipart->hasContent(utility::conversions::to_string_t("askPrice")))
    {
        setAskPrice(ModelBase::doubleFromHttpContent(multipart->getContent(utility::conversions::to_string_t("askPrice"))));
    }
    if(multipart->hasContent(utility::conversions::to_string_t("askSize")))
    {
        setAskSize(ModelBase::doubleFromHttpContent(multipart->getContent(utility::conversions::to_string_t("askSize"))));
    }
}

utility::datetime Quote::getTimestamp() const
{
    return m_Timestamp;
}


void Quote::setTimestamp(utility::datetime value)
{
    m_Timestamp = value;
    
}
utility::string_t Quote::getSymbol() const
{
    return m_Symbol;
}


void Quote::setSymbol(utility::string_t value)
{
    m_Symbol = value;
    
}
double Quote::getBidSize() const
{
    return m_BidSize;
}


void Quote::setBidSize(double value)
{
    m_BidSize = value;
    m_BidSizeIsSet = true;
}
bool Quote::bidSizeIsSet() const
{
    return m_BidSizeIsSet;
}

void Quote::unsetBidSize()
{
    m_BidSizeIsSet = false;
}

double Quote::getBidPrice() const
{
    return m_BidPrice;
}


void Quote::setBidPrice(double value)
{
    m_BidPrice = value;
    m_BidPriceIsSet = true;
}
bool Quote::bidPriceIsSet() const
{
    return m_BidPriceIsSet;
}

void Quote::unsetBidPrice()
{
    m_BidPriceIsSet = false;
}

double Quote::getAskPrice() const
{
    return m_AskPrice;
}


void Quote::setAskPrice(double value)
{
    m_AskPrice = value;
    m_AskPriceIsSet = true;
}
bool Quote::askPriceIsSet() const
{
    return m_AskPriceIsSet;
}

void Quote::unsetAskPrice()
{
    m_AskPriceIsSet = false;
}

double Quote::getAskSize() const
{
    return m_AskSize;
}


void Quote::setAskSize(double value)
{
    m_AskSize = value;
    m_AskSizeIsSet = true;
}
bool Quote::askSizeIsSet() const
{
    return m_AskSizeIsSet;
}

void Quote::unsetAskSize()
{
    m_AskSizeIsSet = false;
}

}
}
}
}


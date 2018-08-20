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

/*
 * FundingApi.h
 *
 * 
 */

#ifndef IO_SWAGGER_CLIENT_API_FundingApi_H_
#define IO_SWAGGER_CLIENT_API_FundingApi_H_


#include "../ApiClient.h"

#include "Error.h"
#include "Funding.h"
#include <cpprest/details/basic_types.h>

#include <boost/optional.hpp>

namespace io {
namespace swagger {
namespace client {
namespace api {

using namespace io::swagger::client::model;

class  FundingApi
{
public:
    FundingApi( std::shared_ptr<ApiClient> apiClient );
    virtual ~FundingApi();
    /// <summary>
    /// Get funding history.
    /// </summary>
    /// <remarks>
    /// 
    /// </remarks>
    /// <param name="symbol">Instrument symbol. Send a bare series (e.g. XBU) to get data for the nearest expiring contract in that series.  You can also send a timeframe, e.g. &#x60;XBU:monthly&#x60;. Timeframes are &#x60;daily&#x60;, &#x60;weekly&#x60;, &#x60;monthly&#x60;, &#x60;quarterly&#x60;, and &#x60;biquarterly&#x60;. (optional)</param>
    /// <param name="filter">Generic table filter. Send JSON key/value pairs, such as &#x60;{\&quot;key\&quot;: \&quot;value\&quot;}&#x60;. You can key on individual fields, and do more advanced querying on timestamps. See the [Timestamp Docs](https://www.bitmex.com/app/restAPI#Timestamp-Filters) for more details. (optional)</param>
    /// <param name="columns">Array of column names to fetch. If omitted, will return all columns.  Note that this method will always return item keys, even when not specified, so you may receive more columns that you expect. (optional)</param>
    /// <param name="count">Number of results to fetch. (optional, default to 100)</param>
    /// <param name="start">Starting point for results. (optional, default to 0)</param>
    /// <param name="reverse">If true, will sort results newest first. (optional, default to false)</param>
    /// <param name="startTime">Starting date filter for results. (optional)</param>
    /// <param name="endTime">Ending date filter for results. (optional)</param>
    pplx::task<std::vector<std::shared_ptr<Funding>>> funding_get(
        boost::optional<utility::string_t> symbol,
        boost::optional<utility::string_t> filter,
        boost::optional<utility::string_t> columns,
        boost::optional<double> count,
        boost::optional<double> start,
        boost::optional<bool> reverse,
        boost::optional<utility::datetime> startTime,
        boost::optional<utility::datetime> endTime
    );

protected:
    std::shared_ptr<ApiClient> m_ApiClient;
};

}
}
}
}

#endif /* IO_SWAGGER_CLIENT_API_FundingApi_H_ */

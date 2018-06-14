/*
 * BitMEX API
 * ## REST API for the BitMEX Trading Platform  [View Changelog](/app/apiChangelog)    #### Getting Started  Base URI: [https://www.bitmex.com/api/v1](/api/v1)  ##### Fetching Data  All REST endpoints are documented below. You can try out any query right from this interface.  Most table queries accept `count`, `start`, and `reverse` params. Set `reverse=true` to get rows newest-first.  Additional documentation regarding filters, timestamps, and authentication is available in [the main API documentation](/app/restAPI).  *All* table data is available via the [Websocket](/app/wsAPI). We highly recommend using the socket if you want to have the quickest possible data without being subject to ratelimits.  ##### Return Types  By default, all data is returned as JSON. Send `?_format=csv` to get CSV data or `?_format=xml` to get XML data.  ##### Trade Data Queries  *This is only a small subset of what is available, to get you started.*  Fill in the parameters and click the `Try it out!` button to try any of these queries.  * [Pricing Data](#!/Quote/Quote_get)  * [Trade Data](#!/Trade/Trade_get)  * [OrderBook Data](#!/OrderBook/OrderBook_getL2)  * [Settlement Data](#!/Settlement/Settlement_get)  * [Exchange Statistics](#!/Stats/Stats_history)  Every function of the BitMEX.com platform is exposed here and documented. Many more functions are available.  ##### Swagger Specification  [⇩ Download Swagger JSON](swagger.json)    ## All API Endpoints  Click to expand a section. 
 *
 * OpenAPI spec version: 1.2.0
 * Contact: support@bitmex.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package io.swagger.client.model;

import java.util.Objects;
import java.util.Arrays;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;
import java.math.BigDecimal;
import org.threeten.bp.OffsetDateTime;

/**
 * Historical Settlement Data
 */
@ApiModel(description = "Historical Settlement Data")
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2018-05-31T16:00:32.015Z")
public class Settlement {
  @SerializedName("timestamp")
  private OffsetDateTime timestamp = null;

  @SerializedName("symbol")
  private String symbol = null;

  @SerializedName("settlementType")
  private String settlementType = null;

  @SerializedName("settledPrice")
  private Double settledPrice = null;

  @SerializedName("optionStrikePrice")
  private Double optionStrikePrice = null;

  @SerializedName("optionUnderlyingPrice")
  private Double optionUnderlyingPrice = null;

  @SerializedName("bankrupt")
  private BigDecimal bankrupt = null;

  @SerializedName("taxBase")
  private BigDecimal taxBase = null;

  @SerializedName("taxRate")
  private Double taxRate = null;

  public Settlement timestamp(OffsetDateTime timestamp) {
    this.timestamp = timestamp;
    return this;
  }

   /**
   * Get timestamp
   * @return timestamp
  **/
  @ApiModelProperty(required = true, value = "")
  public OffsetDateTime getTimestamp() {
    return timestamp;
  }

  public void setTimestamp(OffsetDateTime timestamp) {
    this.timestamp = timestamp;
  }

  public Settlement symbol(String symbol) {
    this.symbol = symbol;
    return this;
  }

   /**
   * Get symbol
   * @return symbol
  **/
  @ApiModelProperty(required = true, value = "")
  public String getSymbol() {
    return symbol;
  }

  public void setSymbol(String symbol) {
    this.symbol = symbol;
  }

  public Settlement settlementType(String settlementType) {
    this.settlementType = settlementType;
    return this;
  }

   /**
   * Get settlementType
   * @return settlementType
  **/
  @ApiModelProperty(value = "")
  public String getSettlementType() {
    return settlementType;
  }

  public void setSettlementType(String settlementType) {
    this.settlementType = settlementType;
  }

  public Settlement settledPrice(Double settledPrice) {
    this.settledPrice = settledPrice;
    return this;
  }

   /**
   * Get settledPrice
   * @return settledPrice
  **/
  @ApiModelProperty(value = "")
  public Double getSettledPrice() {
    return settledPrice;
  }

  public void setSettledPrice(Double settledPrice) {
    this.settledPrice = settledPrice;
  }

  public Settlement optionStrikePrice(Double optionStrikePrice) {
    this.optionStrikePrice = optionStrikePrice;
    return this;
  }

   /**
   * Get optionStrikePrice
   * @return optionStrikePrice
  **/
  @ApiModelProperty(value = "")
  public Double getOptionStrikePrice() {
    return optionStrikePrice;
  }

  public void setOptionStrikePrice(Double optionStrikePrice) {
    this.optionStrikePrice = optionStrikePrice;
  }

  public Settlement optionUnderlyingPrice(Double optionUnderlyingPrice) {
    this.optionUnderlyingPrice = optionUnderlyingPrice;
    return this;
  }

   /**
   * Get optionUnderlyingPrice
   * @return optionUnderlyingPrice
  **/
  @ApiModelProperty(value = "")
  public Double getOptionUnderlyingPrice() {
    return optionUnderlyingPrice;
  }

  public void setOptionUnderlyingPrice(Double optionUnderlyingPrice) {
    this.optionUnderlyingPrice = optionUnderlyingPrice;
  }

  public Settlement bankrupt(BigDecimal bankrupt) {
    this.bankrupt = bankrupt;
    return this;
  }

   /**
   * Get bankrupt
   * @return bankrupt
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getBankrupt() {
    return bankrupt;
  }

  public void setBankrupt(BigDecimal bankrupt) {
    this.bankrupt = bankrupt;
  }

  public Settlement taxBase(BigDecimal taxBase) {
    this.taxBase = taxBase;
    return this;
  }

   /**
   * Get taxBase
   * @return taxBase
  **/
  @ApiModelProperty(value = "")
  public BigDecimal getTaxBase() {
    return taxBase;
  }

  public void setTaxBase(BigDecimal taxBase) {
    this.taxBase = taxBase;
  }

  public Settlement taxRate(Double taxRate) {
    this.taxRate = taxRate;
    return this;
  }

   /**
   * Get taxRate
   * @return taxRate
  **/
  @ApiModelProperty(value = "")
  public Double getTaxRate() {
    return taxRate;
  }

  public void setTaxRate(Double taxRate) {
    this.taxRate = taxRate;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    Settlement settlement = (Settlement) o;
    return Objects.equals(this.timestamp, settlement.timestamp) &&
        Objects.equals(this.symbol, settlement.symbol) &&
        Objects.equals(this.settlementType, settlement.settlementType) &&
        Objects.equals(this.settledPrice, settlement.settledPrice) &&
        Objects.equals(this.optionStrikePrice, settlement.optionStrikePrice) &&
        Objects.equals(this.optionUnderlyingPrice, settlement.optionUnderlyingPrice) &&
        Objects.equals(this.bankrupt, settlement.bankrupt) &&
        Objects.equals(this.taxBase, settlement.taxBase) &&
        Objects.equals(this.taxRate, settlement.taxRate);
  }

  @Override
  public int hashCode() {
    return Objects.hash(timestamp, symbol, settlementType, settledPrice, optionStrikePrice, optionUnderlyingPrice, bankrupt, taxBase, taxRate);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class Settlement {\n");
    
    sb.append("    timestamp: ").append(toIndentedString(timestamp)).append("\n");
    sb.append("    symbol: ").append(toIndentedString(symbol)).append("\n");
    sb.append("    settlementType: ").append(toIndentedString(settlementType)).append("\n");
    sb.append("    settledPrice: ").append(toIndentedString(settledPrice)).append("\n");
    sb.append("    optionStrikePrice: ").append(toIndentedString(optionStrikePrice)).append("\n");
    sb.append("    optionUnderlyingPrice: ").append(toIndentedString(optionUnderlyingPrice)).append("\n");
    sb.append("    bankrupt: ").append(toIndentedString(bankrupt)).append("\n");
    sb.append("    taxBase: ").append(toIndentedString(taxBase)).append("\n");
    sb.append("    taxRate: ").append(toIndentedString(taxRate)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}

